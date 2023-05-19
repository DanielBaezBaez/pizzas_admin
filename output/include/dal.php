<?php

$dal_info = array();

/**
 * User API function
 * @param String sql
 */
function UsersTableName()
{
	global $cman;
	$connection = $cman->getForLogin();
	return $connection->addTableWrappers("users");
}

/**
 * User API function
 * It uses the default db connection
 * @param String dalSQL
 */
function CustomQuery($dalSQL)
{
	$connection = getDefaultConnection();
	$result = $connection->query( $dalSQL );
	if($result)
		return $result;
}

/**
 * User API function
 * It uses the default db connection 
 * @param String sql
 */
function DBLookup($sql)
{
	$connection = getDefaultConnection();
	$data = $connection->query( $sql )->fetchAssoc();

	if( $data )
		return reset($data);
	  
	return null;
}

/**
  * Data Access Layer.
  */
class tDAL
{
	var $tblpizzas_at_localhost__barrios;
	var $tblpizzas_at_localhost__ciudades;
	var $tblpizzas_at_localhost__clientes;
	var $tblpizzas_at_localhost__detalles_facturas;
	var $tblpizzas_at_localhost__detalles_pedidos;
	var $tblpizzas_at_localhost__empresas;
	var $tblpizzas_at_localhost__estados;
	var $tblpizzas_at_localhost__facturas;
	var $tblpizzas_at_localhost__failed_jobs;
	var $tblpizzas_at_localhost__insumos;
	var $tblpizzas_at_localhost__items;
	var $tblpizzas_at_localhost__menus;
	var $tblpizzas_at_localhost__migrations;
	var $tblpizzas_at_localhost__paises;
	var $tblpizzas_at_localhost__password_resets;
	var $tblpizzas_at_localhost__pedidos;
	var $tblpizzas_at_localhost__personal_access_tokens;
	var $tblpizzas_at_localhost__personales;
	var $tblpizzas_at_localhost__personas;
	var $tblpizzas_at_localhost__pizzas_admin_settings;
	var $tblpizzas_at_localhost__preparaciones;
	var $tblpizzas_at_localhost__promociones;
	var $tblpizzas_at_localhost__proveedores;
	var $tblpizzas_at_localhost__sucursales;
	var $tblpizzas_at_localhost__tipo_items;
	var $tblpizzas_at_localhost__tipo_personales;
	var $tblpizzas_at_localhost__users;
	var $lstTables;
	var $Table = array();

	function FillTablesList()
	{
		if($this->lstTables)
			return;
		$this->lstTables[] = array("name" => "barrios", "varname" => "pizzas_at_localhost__barrios", "altvarname" => "barrios", "connId" => "pizzas_at_localhost", "schema" => "", "connName" => "pizzas at localhost");
		$this->lstTables[] = array("name" => "ciudades", "varname" => "pizzas_at_localhost__ciudades", "altvarname" => "ciudades", "connId" => "pizzas_at_localhost", "schema" => "", "connName" => "pizzas at localhost");
		$this->lstTables[] = array("name" => "clientes", "varname" => "pizzas_at_localhost__clientes", "altvarname" => "clientes", "connId" => "pizzas_at_localhost", "schema" => "", "connName" => "pizzas at localhost");
		$this->lstTables[] = array("name" => "detalles_facturas", "varname" => "pizzas_at_localhost__detalles_facturas", "altvarname" => "detalles_facturas", "connId" => "pizzas_at_localhost", "schema" => "", "connName" => "pizzas at localhost");
		$this->lstTables[] = array("name" => "detalles_pedidos", "varname" => "pizzas_at_localhost__detalles_pedidos", "altvarname" => "detalles_pedidos", "connId" => "pizzas_at_localhost", "schema" => "", "connName" => "pizzas at localhost");
		$this->lstTables[] = array("name" => "empresas", "varname" => "pizzas_at_localhost__empresas", "altvarname" => "empresas", "connId" => "pizzas_at_localhost", "schema" => "", "connName" => "pizzas at localhost");
		$this->lstTables[] = array("name" => "estados", "varname" => "pizzas_at_localhost__estados", "altvarname" => "estados", "connId" => "pizzas_at_localhost", "schema" => "", "connName" => "pizzas at localhost");
		$this->lstTables[] = array("name" => "facturas", "varname" => "pizzas_at_localhost__facturas", "altvarname" => "facturas", "connId" => "pizzas_at_localhost", "schema" => "", "connName" => "pizzas at localhost");
		$this->lstTables[] = array("name" => "failed_jobs", "varname" => "pizzas_at_localhost__failed_jobs", "altvarname" => "failed_jobs", "connId" => "pizzas_at_localhost", "schema" => "", "connName" => "pizzas at localhost");
		$this->lstTables[] = array("name" => "insumos", "varname" => "pizzas_at_localhost__insumos", "altvarname" => "insumos", "connId" => "pizzas_at_localhost", "schema" => "", "connName" => "pizzas at localhost");
		$this->lstTables[] = array("name" => "items", "varname" => "pizzas_at_localhost__items", "altvarname" => "items", "connId" => "pizzas_at_localhost", "schema" => "", "connName" => "pizzas at localhost");
		$this->lstTables[] = array("name" => "menus", "varname" => "pizzas_at_localhost__menus", "altvarname" => "menus", "connId" => "pizzas_at_localhost", "schema" => "", "connName" => "pizzas at localhost");
		$this->lstTables[] = array("name" => "migrations", "varname" => "pizzas_at_localhost__migrations", "altvarname" => "migrations", "connId" => "pizzas_at_localhost", "schema" => "", "connName" => "pizzas at localhost");
		$this->lstTables[] = array("name" => "paises", "varname" => "pizzas_at_localhost__paises", "altvarname" => "paises", "connId" => "pizzas_at_localhost", "schema" => "", "connName" => "pizzas at localhost");
		$this->lstTables[] = array("name" => "password_resets", "varname" => "pizzas_at_localhost__password_resets", "altvarname" => "password_resets", "connId" => "pizzas_at_localhost", "schema" => "", "connName" => "pizzas at localhost");
		$this->lstTables[] = array("name" => "pedidos", "varname" => "pizzas_at_localhost__pedidos", "altvarname" => "pedidos", "connId" => "pizzas_at_localhost", "schema" => "", "connName" => "pizzas at localhost");
		$this->lstTables[] = array("name" => "personal_access_tokens", "varname" => "pizzas_at_localhost__personal_access_tokens", "altvarname" => "personal_access_tokens", "connId" => "pizzas_at_localhost", "schema" => "", "connName" => "pizzas at localhost");
		$this->lstTables[] = array("name" => "personales", "varname" => "pizzas_at_localhost__personales", "altvarname" => "personales", "connId" => "pizzas_at_localhost", "schema" => "", "connName" => "pizzas at localhost");
		$this->lstTables[] = array("name" => "personas", "varname" => "pizzas_at_localhost__personas", "altvarname" => "personas", "connId" => "pizzas_at_localhost", "schema" => "", "connName" => "pizzas at localhost");
		$this->lstTables[] = array("name" => "pizzas_admin_settings", "varname" => "pizzas_at_localhost__pizzas_admin_settings", "altvarname" => "pizzas_admin_settings", "connId" => "pizzas_at_localhost", "schema" => "", "connName" => "pizzas at localhost");
		$this->lstTables[] = array("name" => "preparaciones", "varname" => "pizzas_at_localhost__preparaciones", "altvarname" => "preparaciones", "connId" => "pizzas_at_localhost", "schema" => "", "connName" => "pizzas at localhost");
		$this->lstTables[] = array("name" => "promociones", "varname" => "pizzas_at_localhost__promociones", "altvarname" => "promociones", "connId" => "pizzas_at_localhost", "schema" => "", "connName" => "pizzas at localhost");
		$this->lstTables[] = array("name" => "proveedores", "varname" => "pizzas_at_localhost__proveedores", "altvarname" => "proveedores", "connId" => "pizzas_at_localhost", "schema" => "", "connName" => "pizzas at localhost");
		$this->lstTables[] = array("name" => "sucursales", "varname" => "pizzas_at_localhost__sucursales", "altvarname" => "sucursales", "connId" => "pizzas_at_localhost", "schema" => "", "connName" => "pizzas at localhost");
		$this->lstTables[] = array("name" => "tipo_items", "varname" => "pizzas_at_localhost__tipo_items", "altvarname" => "tipo_items", "connId" => "pizzas_at_localhost", "schema" => "", "connName" => "pizzas at localhost");
		$this->lstTables[] = array("name" => "tipo_personales", "varname" => "pizzas_at_localhost__tipo_personales", "altvarname" => "tipo_personales", "connId" => "pizzas_at_localhost", "schema" => "", "connName" => "pizzas at localhost");
		$this->lstTables[] = array("name" => "users", "varname" => "pizzas_at_localhost__users", "altvarname" => "users", "connId" => "pizzas_at_localhost", "schema" => "", "connName" => "pizzas at localhost");
	}

	/**
      * Returns table object by table name.
      * @intellisense
      */
	function & Table($strTable, $schema = "", $connName = "")
	{
		$this->FillTablesList();
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper($strTable)==strtoupper($tbl["name"]) &&
				( schema == "" || strtoupper($schema) == strtoupper($tbl["schema"]) ) &&
				($connName == "" || strtoupper($connName) == strtoupper($tbl["connName"]) ) )
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
//	check table names without dbo. and other prefixes
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper(cutprefix($strTable))==strtoupper(cutprefix($tbl["name"])))
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
		$dummy=null;
		return $dummy;
	}
	
	function CreateClass(&$tbl)
	{
		if($this->{"tbl".$tbl["varname"]})
			return;
//	load table info
		global $dal_info;
		include(getabspath("include/dal/".($tbl["varname"]).".php"));
//	create class and object

		$classname="class_".$tbl["varname"];
		$str = "class ".$classname." extends tDALTable  {";
		foreach($dal_info[$tbl["varname"]] as $fld)
		{
			$str.=' var $'.$fld["varname"].'; ';
		}
		
		$tableName = $tbl["name"];
		if( $tbl["schema"] )
			$tableName = $tbl["schema"] . "." . $tbl["name"];
		$str.=' function __construct()
			{
				$this->m_TableName = \''.escapesq( $tableName ).'\';
				$this->infoKey = \'' . $tbl["varname"] . '\';
				$this->setConnection(\''. $tbl["connId"] .'\');
			}
		};';
		eval($str);
		$this->{"tbl".$tbl["varname"]} = new $classname;
		$this->{$tbl["altvarname"]} = $this->{"tbl".$tbl["varname"]};
		$this->Table[$tbl["name"]]=&$this->{"tbl".$tbl["varname"]};
	}
	
	/**
      * Returns list of table names.
      * @intellisense
      */
	function GetTablesList()
	{
		$this->FillTablesList();
		$res=array();
		foreach($this->lstTables as $tbl)
			$res[]=$tbl["name"];
		return $res;
	}
	
	/**
      * Get list of table fields by table name.
      * @intellisense
      */
	function GetFieldsList($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldsList();
	}
	
	/**
      * Get field type by table name and field name.
      * @intellisense
      */
	function GetFieldType($table,$field)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldType($field);
	}

	/**
      * Get table key fields by table name.
      * @intellisense
      */
	function GetDBTableKeys($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetDBTableKeys();
	}
}

$dal = new tDAL;

/**
 * Data Access Layer table class.
 */ 
class tDALTable
{
	var $m_TableName;
	var $infoKey;
	var $Param = array();
	var $Value = array();
	/**
	 * @type Connection
	 */
	var $_connection;
	
	/**
	 * Set the connection property
	 * @param String connId
	 */
	function setConnection( $connId )
	{
		global $cman;
		$this->_connection = $cman->byId( $connId );
	}
	
	/**
      * Get table key fields.
      * @intellisense
      */
	function GetDBTableKeys()
	{
		global $dal_info;
		if( !array_key_exists($this->infoKey, $dal_info) || !is_array($dal_info[ $this->infoKey ]) )
			return array();
		
		$ret = array();
		foreach($dal_info[ $this->infoKey ] as $fname=>$f)
		{
			if( @$f["key"] )
				$ret[] = $fname;
		}
		return $ret;
	}
	
	/**
      * Get list of table fields.
      * @intellisense
      */
	function GetFieldsList()
	{
		global $dal_info;
		return array_keys( $dal_info[ $this->infoKey ] );
	}

	/**
      * Get field type.
      * @intellisense
      */
	function GetFieldType($field)
	{
		global $dal_info;
		
		if( !array_key_exists( $field, $dal_info[ $this->infoKey ]) )
			return 200;
			
		return $dal_info[ $this->infoKey ][ $field ]["type"];
	}
	
	/**
	 *
	 */
	function PrepareValue($value, $type)
	{
		if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( $this->_connection->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";
					
				return "?";
			}
			
			if( $this->_connection->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}
	
		if( IsDateFieldType($type) )
		{
			if( !$value )
				return "null";
			else
				$this->_connection->addDateQuotes( $value );
		}
		
		if( NeedQuotes($type) )
			return $this->_connection->prepareString( $value );

		return 0 + $value;
	}
	
	/**
      * Get table name.
      * @intellisense
      */
	function TableName()
	{
		return $this->_connection->addTableWrappers( $this->m_TableName );
	} 

	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected function Execute_Query($blobs, $dalSQL, $tableinfo)
	{		
		$blobTypes = array();
		if( $this->_connection->dbType == nDATABASE_Informix )
		{		
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		$this->_connection->execWithBlobProcessing( $dalSQL, $blobs, $blobTypes );
	}

	/**
      * Add new record to the table.
      * @intellisense
      */
	function Add() 
	{
		global $dal_info;
		
		$insertFields = "";
		$insertValues = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		$blobs = array();
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Value[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Value as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$insertFields.= $this->_connection->addFieldWrappers( $fieldname ).",";
				$insertValues.= $this->PrepareValue($value,$fld["type"]) . ",";
				
				if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
				{
					if( IsBinaryType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
						
					if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
				}
				break;
			}
		}
		//	prepare and exec SQL
		if( $insertFields != "" && $insertValues != "" )		
		{
			$insertFields = substr($insertFields, 0, -1);
			$insertValues = substr($insertValues, 0, -1);
			$dalSQL = "insert into ".$this->_connection->addTableWrappers( $this->m_TableName )." (".$insertFields.") values (".$insertValues.")";
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}
		//	cleanup		
	    $this->Reset();
	}

	/**
      * Query all records from the table.
      * @intellisense
      */
	function QueryAll()
	{
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName );
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Do a custom query on the table.
      * @intellisense
      */
	function Query($swhere = "", $orderby = "")
	{
		if ($swhere)
			$swhere = " where ".$swhere;
			
		if ($orderby)
			$orderby = " order by ".$orderby;
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$swhere.$orderby;
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Delete a record from the table.
      * @intellisense
      */
	function Delete()
	{
		global $dal_info;
		
		$deleteFields = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Param[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$deleteFields.= $this->_connection->addFieldWrappers( $fieldname )."=". $this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		//	do delete
		if ($deleteFields)
		{
			$deleteFields = substr($deleteFields, 0, -5);
			$dalSQL = "delete from ".$this->_connection->addTableWrappers( $this->m_TableName )." where ".$deleteFields;
			$this->_connection->exec( $dalSQL );
		}
	
		//	cleanup
	    $this->Reset();
	}

	/**
      * Reset table object.
      * @intellisense
      */
	function Reset()
	{
		global $dal_info;
		
		$this->Value = array();
		$this->Param = array();
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			unset($this->{$fld["varname"]});
		}
	}	

	/**
      * Update record in the table.
      * @intellisense
      */
	function Update()
	{
		global $dal_info;
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		$updateParam = "";
		$updateValue = "";
		$blobs = array();

		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			if( $fld["key"] )
				$command.= '$this->Param[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			else
				$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			if( !$fld["key"] && !array_key_exists( strtoupper($fieldname), array_change_key_case($this->Param, CASE_UPPER) ) )
			{
				foreach($this->Value as $field => $value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateValue.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . ", ";
					
					if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
					{
						if( IsBinaryType( $fld["type"] ) )
							$blobs[ $fieldname ] = $value;
							
						if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )	
							$blobs[ $fieldname ] = $value;		
					}
					break;
				}
			}
			else
			{
				foreach($this->Param as $field=>$value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateParam.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
					break;
				}
			}
		}

		//	construct SQL and do update	
		if ($updateParam)
			$updateParam = substr($updateParam, 0, -5);
		if ($updateValue)
			$updateValue = substr($updateValue, 0, -2);
			
		if ($updateValue && $updateParam)
		{
			$dalSQL = "update ".$this->_connection->addTableWrappers( $this->m_TableName )." set ".$updateValue." where ".$updateParam;
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}

		//	cleanup
		$this->Reset();
	}
	
	/**
	 * Select one or more records matching the condition
	 */
	function FetchByID()
	{
		global $dal_info;
		$tableinfo = &$dal_info[ $this->infoKey ];

		$dal_where = "";
		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$dal_where.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		// cleanup
		$this->Reset();
		// construct and run SQL
		if ($dal_where)
			$dal_where = " where ".substr($dal_where, 0, -5);
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$dal_where;
		return $this->_connection->query( $dalSQL );
	}
}

function cutprefix($table)
{
	$pos = strpos($table,".");
	if( $pos === false )
		return $table;
		
	return substr($table, $pos + 1);
}

function escapesq($str)
{
	return str_replace(array("\\","'"),array("\\\\","\\'"),$str);
}

?>