<?php

// Load the full SQLite bootstrap: constants (FQDBDIR/FQDB), driver classes,
// and WP_SQLite_DB instantiation. DB_ENGINE, DB_DIR, and DB_FILE must be
// defined before this point (done in wp-config.php from .env values).
require_once BASE_DIR . 'vendor/websyspro/wpengine/src/Extras/sqlite/db.php';