# Updating Symbiota

## Code Updates

If you installed Symbiota through GitHub using the clone command, code changes and bugs fixes can be integrated into your local checkout using either the GitHub Desktop client or running the "git pull" command in the Git terminal.

## Database Schema Updates

Some PHP code updates will require database schema modifications. Schema changes can be applied by running new schema patches added since the last update (MySQL command line: `source db_schema_patch_1.1.sql` or running the appropriate file through the MySQL Workbench client).

Current Symbiota version numbers are listed at the bottom of `sitemap.php` page, as well as in the database (table `schemaversion`). Make sure to run the scripts in the correct order (e.g. `db_schema_patch_1.1.sql`, then `db_schema_patch_1.2.sql`, etc).
