<?php

namespace Ezoic_Namespace;

/**
 *
 * @package    Ezoic_CMS_File
 */
class Ezoic_Content_File {
	/**
	 * Recursively determines the file paths for all images in the uploads directory in the filesystem
	 * the default storage place for all WP images
	 */
	private function uploaded_image_filepaths() {
		// images might not be located here
		$uploads_dir = $_SERVER['DOCUMENT_ROOT'] . '/wp-content' . '/uploads';

		// test opening dir first, otherwise get fatal error from RecursiveIteratorIterator if fopen fails in constructor
		$exists_dir = fopen( $uploads_dir, "r");
		if ( !$exists_dir ) {
			return "could not open directory to get images";
		} else {
			$files = new \RecursiveIteratorIterator(
				new \RecursiveDirectoryIterator( $uploads_dir ),
				\RecursiveIteratorIterator::LEAVES_ONLY
			);
		}

		$paths = array();

		foreach ( $files as $name => $file ) {
			if ( !$file->isDir() ) {
				// Get real and relative path for current file
				$file_path = $file->getRealPath();
				$relative_path = substr( $file_path, strlen( $uploads_dir ) + 1 );

				// make sure its a full sized image. if it is, add to archive
				if ( !preg_match( '/[0-9]{3}x[0-9]{3}/', $relative_path ) ) {
					array_push( $paths, array( $file_path, $relative_path ) );
				}
			}
		}
		return $paths;
	}

	public function create_image_archive() {
		$image_batch_size = 10;
		$image_paths = $this->uploaded_image_filepaths();
		if ( Ezoic_Content_Util::is_error( $image_paths ) ) {
			return $image_paths;
		}

		$temp_dir = get_temp_dir();
		$archive_filepath = $temp_dir . 'images.zip';
		$zip = new \ZipArchive();
		if ($zip->open($archive_filepath, (\ZipArchive::CREATE | \ZipArchive::OVERWRITE)) !== true) {
			return "Failed to create zip file for images";
		}

		foreach ( $image_paths as $image ) {
			$file_path = $image[0];
			$relative_path = $image[1];
			$res = $zip->addFile( $file_path, $relative_path );
			if ( !$res ) {
				return "Could not add image file to zip: " . $file_path;
			}
		}

		$res = $zip->close();
		if ( !$res ) {
			return "Failed to close images zip archive";
		}

		return true;
	}

	/**
	 * Zip all relevant files
	 */
	public function package_export_files( $archive_name, $export_files ) {
		$temp_dir = get_temp_dir();
		$archive_filepath = $temp_dir . $archive_name;
		$zip = new \ZipArchive();

		$archive_opened = $zip->open( $archive_filepath, \ZipArchive::CREATE | \ZipArchive::OVERWRITE );

		if ( $archive_opened !== true ) {
			return "Failed to open zip archive at location: " . $archive_filepath . " with error: " . print_r( $archive_opened, true );
		}

		foreach ( $export_files as $file ) {
			$file_path = $temp_dir . $file;

			if ( file_exists( $file_path ) ) {
				$file_added = $zip->addFile( $file_path, $file );
				if ( !$file_added ) {
					return "Failed to add file to zip archive at location: " . $archive_filepath;
				}
			}
		}

		// Zip archive will be created only after closing object
		$archive_closed = $zip->close();
		if ( !$archive_closed ) {
			return "Failed to close zip archive at location: " . $archive_filepath;
		}
		return true;
	}

	public function verify_files( $files_to_check ) {
		$temp_dir = get_temp_dir();
		$filesizes = array();
		foreach ( $files_to_check as $file ) {
			$file_path = $temp_dir . $file;
			if ( file_exists( $file_path ) ) {
				$filesizes[$file] = filesize( $file_path );
			} else {
				$filesizes[$file] = 'Does not exist';
			}
		}
		return $filesizes;
	}

	public function cleanup_files( $files_to_delete ) {
		$temp_dir = get_temp_dir();
		foreach ( $files_to_delete as $file ) {
			$file_path = $temp_dir . $file;
			if ( file_exists( $file_path ) ) {
				error_log( '[CMS EXPORT] Cleanup - Deleting ' . $file_path );
				unlink( $file_path );
			} else {
				error_log( '[CMS EXPORT] Cleanup - Did not find ' . $file_path );
			}
		}
	}


}
