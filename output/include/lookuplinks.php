<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

	$lookupTableLinks["empresas"]["barrios.empresa_id"]["edit"] = array("table" => "barrios", "field" => "empresa_id", "page" => "edit");
	$lookupTableLinks["users"]["barrios.creado_por"]["edit"] = array("table" => "barrios", "field" => "creado_por", "page" => "edit");
	$lookupTableLinks["users"]["barrios.actualizado_por"]["edit"] = array("table" => "barrios", "field" => "actualizado_por", "page" => "edit");
	$lookupTableLinks["empresas"]["ciudades.empresa_id"]["edit"] = array("table" => "ciudades", "field" => "empresa_id", "page" => "edit");
	$lookupTableLinks["users"]["ciudades.creado_por"]["edit"] = array("table" => "ciudades", "field" => "creado_por", "page" => "edit");
	$lookupTableLinks["users"]["ciudades.actualizado_por"]["edit"] = array("table" => "ciudades", "field" => "actualizado_por", "page" => "edit");
	$lookupTableLinks["personas"]["clientes.persona_id"]["edit"] = array("table" => "clientes", "field" => "persona_id", "page" => "edit");
	$lookupTableLinks["empresas"]["clientes.empresa_id"]["edit"] = array("table" => "clientes", "field" => "empresa_id", "page" => "edit");
	$lookupTableLinks["users"]["clientes.creado_por"]["edit"] = array("table" => "clientes", "field" => "creado_por", "page" => "edit");
	$lookupTableLinks["users"]["clientes.actualizado_por"]["edit"] = array("table" => "clientes", "field" => "actualizado_por", "page" => "edit");
	$lookupTableLinks["facturas"]["detalles_facturas.factura_id"]["edit"] = array("table" => "detalles_facturas", "field" => "factura_id", "page" => "edit");
	$lookupTableLinks["empresas"]["detalles_facturas.empresa_id"]["edit"] = array("table" => "detalles_facturas", "field" => "empresa_id", "page" => "edit");
	$lookupTableLinks["users"]["detalles_facturas.creado_por"]["edit"] = array("table" => "detalles_facturas", "field" => "creado_por", "page" => "edit");
	$lookupTableLinks["users"]["detalles_facturas.actualizado_por"]["edit"] = array("table" => "detalles_facturas", "field" => "actualizado_por", "page" => "edit");
	$lookupTableLinks["pedidos"]["detalles_pedidos.pedido_id"]["edit"] = array("table" => "detalles_pedidos", "field" => "pedido_id", "page" => "edit");
	$lookupTableLinks["items"]["detalles_pedidos.item_id"]["edit"] = array("table" => "detalles_pedidos", "field" => "item_id", "page" => "edit");
	$lookupTableLinks["empresas"]["detalles_pedidos.empresa_id"]["edit"] = array("table" => "detalles_pedidos", "field" => "empresa_id", "page" => "edit");
	$lookupTableLinks["users"]["detalles_pedidos.creado_por"]["edit"] = array("table" => "detalles_pedidos", "field" => "creado_por", "page" => "edit");
	$lookupTableLinks["users"]["detalles_pedidos.actualizado_por"]["edit"] = array("table" => "detalles_pedidos", "field" => "actualizado_por", "page" => "edit");
	$lookupTableLinks["users"]["empresas.creado_por"]["edit"] = array("table" => "empresas", "field" => "creado_por", "page" => "edit");
	$lookupTableLinks["users"]["empresas.actualizado_por"]["edit"] = array("table" => "empresas", "field" => "actualizado_por", "page" => "edit");
	$lookupTableLinks["users"]["estados.creado_por"]["edit"] = array("table" => "estados", "field" => "creado_por", "page" => "edit");
	$lookupTableLinks["users"]["estados.actualizado_por"]["edit"] = array("table" => "estados", "field" => "actualizado_por", "page" => "edit");
	$lookupTableLinks["empresas"]["facturas.empresa_id"]["edit"] = array("table" => "facturas", "field" => "empresa_id", "page" => "edit");
	$lookupTableLinks["users"]["facturas.creado_por"]["edit"] = array("table" => "facturas", "field" => "creado_por", "page" => "edit");
	$lookupTableLinks["users"]["facturas.actualizado_por"]["edit"] = array("table" => "facturas", "field" => "actualizado_por", "page" => "edit");
	$lookupTableLinks["empresas"]["insumos.empresa_id"]["edit"] = array("table" => "insumos", "field" => "empresa_id", "page" => "edit");
	$lookupTableLinks["users"]["insumos.creado_por"]["edit"] = array("table" => "insumos", "field" => "creado_por", "page" => "edit");
	$lookupTableLinks["users"]["insumos.actualizado_por"]["edit"] = array("table" => "insumos", "field" => "actualizado_por", "page" => "edit");
	$lookupTableLinks["tipo_items"]["items.tipo_item_id"]["edit"] = array("table" => "items", "field" => "tipo_item_id", "page" => "edit");
	$lookupTableLinks["empresas"]["items.empresa_id"]["edit"] = array("table" => "items", "field" => "empresa_id", "page" => "edit");
	$lookupTableLinks["users"]["items.creado_por"]["edit"] = array("table" => "items", "field" => "creado_por", "page" => "edit");
	$lookupTableLinks["users"]["items.actualizado_por"]["edit"] = array("table" => "items", "field" => "actualizado_por", "page" => "edit");
	$lookupTableLinks["users"]["menus.creado_por"]["edit"] = array("table" => "menus", "field" => "creado_por", "page" => "edit");
	$lookupTableLinks["users"]["menus.actualizado_por"]["edit"] = array("table" => "menus", "field" => "actualizado_por", "page" => "edit");
	$lookupTableLinks["empresas"]["paises.empresa_id"]["edit"] = array("table" => "paises", "field" => "empresa_id", "page" => "edit");
	$lookupTableLinks["users"]["paises.creado_por"]["edit"] = array("table" => "paises", "field" => "creado_por", "page" => "edit");
	$lookupTableLinks["users"]["paises.actualizado_por"]["edit"] = array("table" => "paises", "field" => "actualizado_por", "page" => "edit");
	$lookupTableLinks["estados"]["pedidos.estado_id"]["edit"] = array("table" => "pedidos", "field" => "estado_id", "page" => "edit");
	$lookupTableLinks["empresas"]["pedidos.empresa_id"]["edit"] = array("table" => "pedidos", "field" => "empresa_id", "page" => "edit");
	$lookupTableLinks["users"]["pedidos.user_id"]["edit"] = array("table" => "pedidos", "field" => "user_id", "page" => "edit");
	$lookupTableLinks["users"]["pedidos.creado_por"]["edit"] = array("table" => "pedidos", "field" => "creado_por", "page" => "edit");
	$lookupTableLinks["users"]["pedidos.actualizado_por"]["edit"] = array("table" => "pedidos", "field" => "actualizado_por", "page" => "edit");
	$lookupTableLinks["personas"]["personales.persona_id"]["edit"] = array("table" => "personales", "field" => "persona_id", "page" => "edit");
	$lookupTableLinks["empresas"]["personales.empresa_id"]["edit"] = array("table" => "personales", "field" => "empresa_id", "page" => "edit");
	$lookupTableLinks["users"]["personales.creado_por"]["edit"] = array("table" => "personales", "field" => "creado_por", "page" => "edit");
	$lookupTableLinks["users"]["personales.actualizado_por"]["edit"] = array("table" => "personales", "field" => "actualizado_por", "page" => "edit");
	$lookupTableLinks["users"]["personas.creado_por"]["edit"] = array("table" => "personas", "field" => "creado_por", "page" => "edit");
	$lookupTableLinks["empresas"]["personas.empresa_id"]["edit"] = array("table" => "personas", "field" => "empresa_id", "page" => "edit");
	$lookupTableLinks["users"]["personas.actualizado_por"]["edit"] = array("table" => "personas", "field" => "actualizado_por", "page" => "edit");
	$lookupTableLinks["empresas"]["preparaciones.empresa_id"]["edit"] = array("table" => "preparaciones", "field" => "empresa_id", "page" => "edit");
	$lookupTableLinks["users"]["preparaciones.creado_por"]["edit"] = array("table" => "preparaciones", "field" => "creado_por", "page" => "edit");
	$lookupTableLinks["users"]["preparaciones.actualizado_por"]["edit"] = array("table" => "preparaciones", "field" => "actualizado_por", "page" => "edit");
	$lookupTableLinks["empresas"]["promociones.empresa_id"]["edit"] = array("table" => "promociones", "field" => "empresa_id", "page" => "edit");
	$lookupTableLinks["users"]["promociones.creado_por"]["edit"] = array("table" => "promociones", "field" => "creado_por", "page" => "edit");
	$lookupTableLinks["users"]["promociones.actualizado_por"]["edit"] = array("table" => "promociones", "field" => "actualizado_por", "page" => "edit");
	$lookupTableLinks["personas"]["proveedores.persona_id"]["edit"] = array("table" => "proveedores", "field" => "persona_id", "page" => "edit");
	$lookupTableLinks["empresas"]["proveedores.empresa_id"]["edit"] = array("table" => "proveedores", "field" => "empresa_id", "page" => "edit");
	$lookupTableLinks["users"]["proveedores.creado_por"]["edit"] = array("table" => "proveedores", "field" => "creado_por", "page" => "edit");
	$lookupTableLinks["users"]["proveedores.actualizado_por"]["edit"] = array("table" => "proveedores", "field" => "actualizado_por", "page" => "edit");
	$lookupTableLinks["empresas"]["sucursales.empresa_id"]["edit"] = array("table" => "sucursales", "field" => "empresa_id", "page" => "edit");
	$lookupTableLinks["users"]["sucursales.creado_por"]["edit"] = array("table" => "sucursales", "field" => "creado_por", "page" => "edit");
	$lookupTableLinks["users"]["sucursales.actualizado_por"]["edit"] = array("table" => "sucursales", "field" => "actualizado_por", "page" => "edit");
	$lookupTableLinks["users"]["tipo_items.creado_por"]["edit"] = array("table" => "tipo_items", "field" => "creado_por", "page" => "edit");
	$lookupTableLinks["users"]["tipo_items.actualizado_por"]["edit"] = array("table" => "tipo_items", "field" => "actualizado_por", "page" => "edit");
	$lookupTableLinks["users"]["tipo_personales.creado_por"]["edit"] = array("table" => "tipo_personales", "field" => "creado_por", "page" => "edit");
	$lookupTableLinks["users"]["tipo_personales.actualizado_por"]["edit"] = array("table" => "tipo_personales", "field" => "actualizado_por", "page" => "edit");
	$lookupTableLinks["empresas"]["users.empresa_id"]["edit"] = array("table" => "users", "field" => "empresa_id", "page" => "edit");
}

?>