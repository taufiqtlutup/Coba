<?
// Default konfigurasi database
$db['default'] = array(
    'dsn'       => '',
    'hostname' => 'localhost',
    'username' => 'username_database',
    'password' => 'password_database',
    'database' => 'nama_database',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt'  => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
 
// Konfigurasi database kedua
$db['database_kedua'] = array(
    'dsn'       => '',
    'hostname' => 'localhost',
    'username' => 'username_database_kedua',
    'password' => 'password_database_kedua',
    'database' => 'nama_database_kedua',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt'  => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);

// Load database kedua
$db2 = $this->load->database('database_kedua', TRUE);

// Default query database
$this->db->select('first_name, last_name');
$this->db->from('tbl_users');
$this->db->where('id', 99);
$query = $this->db->get();
 
// Query dari database kedua
$db2->select('image');
$db2->from('tbl_images');
$db2->where('id', 25);
$query = $db2->get();

?>