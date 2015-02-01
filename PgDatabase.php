<?php
require_once('AbstractDb.php');
require_once('InterfaceDb.php');

class PgDatabase extends AbstractDb implements InterfaceDb{
	
	function connect()
	{
		$connectionString='host='.$this->host.' '.
						  'port='.$this->port.' '.
						  'dbname='.$this->database.' '.
						  'user='.$this->username.' '.
						  'password='.$this->password;
						  
		$this->connection=pg_connect($connectionString);
	}
	
	public function is_connected(){
		
		if(pg_connection_status($this->connection)===PGSQL_CONNECTION_OK)
		{
			return TRUE;
		}else{
			return FALSE;
		}
	}
	function add($query){
		pg_query($this->connection,$query);
	}
	function delete($query){
		pg_query($this->connection,$query);
	}
	function update($query){
		pg_query($this->connection,$query);
	}
	function retrieve($query){
		return pg_fetch_object(pg_query($this->connection,$query));
	}
}
?>