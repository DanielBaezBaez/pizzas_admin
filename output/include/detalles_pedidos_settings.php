<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadetalles_pedidos = array();
	$tdatadetalles_pedidos[".truncateText"] = true;
	$tdatadetalles_pedidos[".NumberOfChars"] = 80;
	$tdatadetalles_pedidos[".ShortName"] = "detalles_pedidos";
	$tdatadetalles_pedidos[".OwnerID"] = "empresa_id";
	$tdatadetalles_pedidos[".OriginalTable"] = "detalles_pedidos";

//	field labels
$fieldLabelsdetalles_pedidos = array();
$fieldToolTipsdetalles_pedidos = array();
$pageTitlesdetalles_pedidos = array();
$placeHoldersdetalles_pedidos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdetalles_pedidos["Spanish"] = array();
	$fieldToolTipsdetalles_pedidos["Spanish"] = array();
	$placeHoldersdetalles_pedidos["Spanish"] = array();
	$pageTitlesdetalles_pedidos["Spanish"] = array();
	$fieldLabelsdetalles_pedidos["Spanish"]["id"] = "Id";
	$fieldToolTipsdetalles_pedidos["Spanish"]["id"] = "";
	$placeHoldersdetalles_pedidos["Spanish"]["id"] = "";
	$fieldLabelsdetalles_pedidos["Spanish"]["cantidad"] = "Cantidad";
	$fieldToolTipsdetalles_pedidos["Spanish"]["cantidad"] = "";
	$placeHoldersdetalles_pedidos["Spanish"]["cantidad"] = "";
	$fieldLabelsdetalles_pedidos["Spanish"]["costo"] = "Costo";
	$fieldToolTipsdetalles_pedidos["Spanish"]["costo"] = "";
	$placeHoldersdetalles_pedidos["Spanish"]["costo"] = "";
	$fieldLabelsdetalles_pedidos["Spanish"]["pedido_id"] = "Pedido";
	$fieldToolTipsdetalles_pedidos["Spanish"]["pedido_id"] = "";
	$placeHoldersdetalles_pedidos["Spanish"]["pedido_id"] = "";
	$fieldLabelsdetalles_pedidos["Spanish"]["item_id"] = "Item";
	$fieldToolTipsdetalles_pedidos["Spanish"]["item_id"] = "";
	$placeHoldersdetalles_pedidos["Spanish"]["item_id"] = "";
	$fieldLabelsdetalles_pedidos["Spanish"]["empresa_id"] = "Empresa Id";
	$fieldToolTipsdetalles_pedidos["Spanish"]["empresa_id"] = "";
	$placeHoldersdetalles_pedidos["Spanish"]["empresa_id"] = "";
	$fieldLabelsdetalles_pedidos["Spanish"]["creado_por"] = "Creado Por";
	$fieldToolTipsdetalles_pedidos["Spanish"]["creado_por"] = "";
	$placeHoldersdetalles_pedidos["Spanish"]["creado_por"] = "";
	$fieldLabelsdetalles_pedidos["Spanish"]["actualizado_por"] = "Actualizado Por";
	$fieldToolTipsdetalles_pedidos["Spanish"]["actualizado_por"] = "";
	$placeHoldersdetalles_pedidos["Spanish"]["actualizado_por"] = "";
	$fieldLabelsdetalles_pedidos["Spanish"]["creado"] = "Creado";
	$fieldToolTipsdetalles_pedidos["Spanish"]["creado"] = "";
	$placeHoldersdetalles_pedidos["Spanish"]["creado"] = "";
	$fieldLabelsdetalles_pedidos["Spanish"]["actualizado"] = "Actualizado";
	$fieldToolTipsdetalles_pedidos["Spanish"]["actualizado"] = "";
	$placeHoldersdetalles_pedidos["Spanish"]["actualizado"] = "";
	if (count($fieldToolTipsdetalles_pedidos["Spanish"]))
		$tdatadetalles_pedidos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdetalles_pedidos[""] = array();
	$fieldToolTipsdetalles_pedidos[""] = array();
	$placeHoldersdetalles_pedidos[""] = array();
	$pageTitlesdetalles_pedidos[""] = array();
	if (count($fieldToolTipsdetalles_pedidos[""]))
		$tdatadetalles_pedidos[".isUseToolTips"] = true;
}


	$tdatadetalles_pedidos[".NCSearch"] = true;



$tdatadetalles_pedidos[".shortTableName"] = "detalles_pedidos";
$tdatadetalles_pedidos[".nSecOptions"] = 1;
$tdatadetalles_pedidos[".recsPerRowPrint"] = 1;
$tdatadetalles_pedidos[".mainTableOwnerID"] = "empresa_id";
$tdatadetalles_pedidos[".moveNext"] = 1;
$tdatadetalles_pedidos[".entityType"] = 0;

$tdatadetalles_pedidos[".strOriginalTableName"] = "detalles_pedidos";

	



$tdatadetalles_pedidos[".showAddInPopup"] = false;

$tdatadetalles_pedidos[".showEditInPopup"] = false;

$tdatadetalles_pedidos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadetalles_pedidos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadetalles_pedidos[".fieldsForRegister"] = array();

$tdatadetalles_pedidos[".listAjax"] = false;

	$tdatadetalles_pedidos[".audit"] = false;

	$tdatadetalles_pedidos[".locking"] = false;

$tdatadetalles_pedidos[".edit"] = true;
$tdatadetalles_pedidos[".afterEditAction"] = 1;
$tdatadetalles_pedidos[".closePopupAfterEdit"] = 1;
$tdatadetalles_pedidos[".afterEditActionDetTable"] = "";

$tdatadetalles_pedidos[".add"] = true;
$tdatadetalles_pedidos[".afterAddAction"] = 1;
$tdatadetalles_pedidos[".closePopupAfterAdd"] = 1;
$tdatadetalles_pedidos[".afterAddActionDetTable"] = "";

$tdatadetalles_pedidos[".list"] = true;



$tdatadetalles_pedidos[".reorderRecordsByHeader"] = true;


$tdatadetalles_pedidos[".exportFormatting"] = 2;
$tdatadetalles_pedidos[".exportDelimiter"] = ",";
		
$tdatadetalles_pedidos[".view"] = true;

$tdatadetalles_pedidos[".import"] = true;

$tdatadetalles_pedidos[".exportTo"] = true;

$tdatadetalles_pedidos[".printFriendly"] = true;

$tdatadetalles_pedidos[".delete"] = true;

$tdatadetalles_pedidos[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatadetalles_pedidos[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatadetalles_pedidos[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatadetalles_pedidos[".searchSaving"] = false;
//

$tdatadetalles_pedidos[".showSearchPanel"] = true;
		$tdatadetalles_pedidos[".flexibleSearch"] = true;

$tdatadetalles_pedidos[".isUseAjaxSuggest"] = true;

$tdatadetalles_pedidos[".rowHighlite"] = true;





$tdatadetalles_pedidos[".ajaxCodeSnippetAdded"] = false;

$tdatadetalles_pedidos[".buttonsAdded"] = false;

$tdatadetalles_pedidos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadetalles_pedidos[".isUseTimeForSearch"] = false;



$tdatadetalles_pedidos[".badgeColor"] = "4682B4";


$tdatadetalles_pedidos[".allSearchFields"] = array();
$tdatadetalles_pedidos[".filterFields"] = array();
$tdatadetalles_pedidos[".requiredSearchFields"] = array();

$tdatadetalles_pedidos[".allSearchFields"][] = "cantidad";
	$tdatadetalles_pedidos[".allSearchFields"][] = "costo";
	$tdatadetalles_pedidos[".allSearchFields"][] = "item_id";
	

$tdatadetalles_pedidos[".googleLikeFields"] = array();
$tdatadetalles_pedidos[".googleLikeFields"][] = "id";
$tdatadetalles_pedidos[".googleLikeFields"][] = "cantidad";
$tdatadetalles_pedidos[".googleLikeFields"][] = "costo";
$tdatadetalles_pedidos[".googleLikeFields"][] = "pedido_id";
$tdatadetalles_pedidos[".googleLikeFields"][] = "item_id";
$tdatadetalles_pedidos[".googleLikeFields"][] = "empresa_id";
$tdatadetalles_pedidos[".googleLikeFields"][] = "creado_por";
$tdatadetalles_pedidos[".googleLikeFields"][] = "actualizado_por";
$tdatadetalles_pedidos[".googleLikeFields"][] = "creado";
$tdatadetalles_pedidos[".googleLikeFields"][] = "actualizado";


$tdatadetalles_pedidos[".advSearchFields"] = array();
$tdatadetalles_pedidos[".advSearchFields"][] = "cantidad";
$tdatadetalles_pedidos[".advSearchFields"][] = "costo";
$tdatadetalles_pedidos[".advSearchFields"][] = "item_id";

$tdatadetalles_pedidos[".tableType"] = "list";

$tdatadetalles_pedidos[".printerPageOrientation"] = 0;
$tdatadetalles_pedidos[".nPrinterPageScale"] = 100;

$tdatadetalles_pedidos[".nPrinterSplitRecords"] = 40;

$tdatadetalles_pedidos[".nPrinterPDFSplitRecords"] = 40;



$tdatadetalles_pedidos[".geocodingEnabled"] = false;





$tdatadetalles_pedidos[".listGridLayout"] = 3;


$tdatadetalles_pedidos[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdatadetalles_pedidos[".pageSize"] = 20;

$tdatadetalles_pedidos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadetalles_pedidos[".strOrderBy"] = $tstrOrderBy;

$tdatadetalles_pedidos[".orderindexes"] = array();

$tdatadetalles_pedidos[".sqlHead"] = "SELECT id,  	cantidad,  	costo,  	pedido_id,  	item_id,  	empresa_id,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$tdatadetalles_pedidos[".sqlFrom"] = "FROM detalles_pedidos";
$tdatadetalles_pedidos[".sqlWhereExpr"] = "";
$tdatadetalles_pedidos[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadetalles_pedidos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadetalles_pedidos[".arrGroupsPerPage"] = $arrGPP;

$tdatadetalles_pedidos[".highlightSearchResults"] = true;

$tableKeysdetalles_pedidos = array();
$tableKeysdetalles_pedidos[] = "id";
$tdatadetalles_pedidos[".Keys"] = $tableKeysdetalles_pedidos;

$tdatadetalles_pedidos[".listFields"] = array();
$tdatadetalles_pedidos[".listFields"][] = "cantidad";
$tdatadetalles_pedidos[".listFields"][] = "costo";
$tdatadetalles_pedidos[".listFields"][] = "item_id";
$tdatadetalles_pedidos[".listFields"][] = "creado_por";
$tdatadetalles_pedidos[".listFields"][] = "actualizado_por";
$tdatadetalles_pedidos[".listFields"][] = "creado";
$tdatadetalles_pedidos[".listFields"][] = "actualizado";

$tdatadetalles_pedidos[".hideMobileList"] = array();


$tdatadetalles_pedidos[".viewFields"] = array();
$tdatadetalles_pedidos[".viewFields"][] = "cantidad";
$tdatadetalles_pedidos[".viewFields"][] = "costo";
$tdatadetalles_pedidos[".viewFields"][] = "item_id";

$tdatadetalles_pedidos[".addFields"] = array();
$tdatadetalles_pedidos[".addFields"][] = "cantidad";
$tdatadetalles_pedidos[".addFields"][] = "costo";
$tdatadetalles_pedidos[".addFields"][] = "item_id";

$tdatadetalles_pedidos[".masterListFields"] = array();
$tdatadetalles_pedidos[".masterListFields"][] = "id";
$tdatadetalles_pedidos[".masterListFields"][] = "cantidad";
$tdatadetalles_pedidos[".masterListFields"][] = "costo";
$tdatadetalles_pedidos[".masterListFields"][] = "pedido_id";
$tdatadetalles_pedidos[".masterListFields"][] = "item_id";
$tdatadetalles_pedidos[".masterListFields"][] = "empresa_id";
$tdatadetalles_pedidos[".masterListFields"][] = "creado_por";
$tdatadetalles_pedidos[".masterListFields"][] = "actualizado_por";
$tdatadetalles_pedidos[".masterListFields"][] = "creado";
$tdatadetalles_pedidos[".masterListFields"][] = "actualizado";

$tdatadetalles_pedidos[".inlineAddFields"] = array();

$tdatadetalles_pedidos[".editFields"] = array();
$tdatadetalles_pedidos[".editFields"][] = "cantidad";
$tdatadetalles_pedidos[".editFields"][] = "costo";
$tdatadetalles_pedidos[".editFields"][] = "item_id";

$tdatadetalles_pedidos[".inlineEditFields"] = array();

$tdatadetalles_pedidos[".updateSelectedFields"] = array();
$tdatadetalles_pedidos[".updateSelectedFields"][] = "cantidad";
$tdatadetalles_pedidos[".updateSelectedFields"][] = "costo";
$tdatadetalles_pedidos[".updateSelectedFields"][] = "item_id";


$tdatadetalles_pedidos[".exportFields"] = array();
$tdatadetalles_pedidos[".exportFields"][] = "cantidad";
$tdatadetalles_pedidos[".exportFields"][] = "costo";
$tdatadetalles_pedidos[".exportFields"][] = "item_id";

$tdatadetalles_pedidos[".importFields"] = array();
$tdatadetalles_pedidos[".importFields"][] = "cantidad";
$tdatadetalles_pedidos[".importFields"][] = "costo";
$tdatadetalles_pedidos[".importFields"][] = "item_id";

$tdatadetalles_pedidos[".printFields"] = array();
$tdatadetalles_pedidos[".printFields"][] = "cantidad";
$tdatadetalles_pedidos[".printFields"][] = "costo";
$tdatadetalles_pedidos[".printFields"][] = "item_id";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "detalles_pedidos";
	$fdata["Label"] = GetFieldLabel("detalles_pedidos","id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatadetalles_pedidos["id"] = $fdata;
//	cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cantidad";
	$fdata["GoodName"] = "cantidad";
	$fdata["ownerTable"] = "detalles_pedidos";
	$fdata["Label"] = GetFieldLabel("detalles_pedidos","cantidad");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cantidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cantidad";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadetalles_pedidos["cantidad"] = $fdata;
//	costo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "costo";
	$fdata["GoodName"] = "costo";
	$fdata["ownerTable"] = "detalles_pedidos";
	$fdata["Label"] = GetFieldLabel("detalles_pedidos","costo");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "costo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "costo";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadetalles_pedidos["costo"] = $fdata;
//	pedido_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "pedido_id";
	$fdata["GoodName"] = "pedido_id";
	$fdata["ownerTable"] = "detalles_pedidos";
	$fdata["Label"] = GetFieldLabel("detalles_pedidos","pedido_id");
	$fdata["FieldType"] = 20;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "pedido_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pedido_id";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "pedidos";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "id";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatadetalles_pedidos["pedido_id"] = $fdata;
//	item_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "item_id";
	$fdata["GoodName"] = "item_id";
	$fdata["ownerTable"] = "detalles_pedidos";
	$fdata["Label"] = GetFieldLabel("detalles_pedidos","item_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "item_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "item_id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "items";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "descripcion";
	
	

	
	$edata["LookupOrderBy"] = "descripcion";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadetalles_pedidos["item_id"] = $fdata;
//	empresa_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "empresa_id";
	$fdata["GoodName"] = "empresa_id";
	$fdata["ownerTable"] = "detalles_pedidos";
	$fdata["Label"] = GetFieldLabel("detalles_pedidos","empresa_id");
	$fdata["FieldType"] = 20;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "empresa_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "empresa_id";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "empresas";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "id";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatadetalles_pedidos["empresa_id"] = $fdata;
//	creado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "creado_por";
	$fdata["GoodName"] = "creado_por";
	$fdata["ownerTable"] = "detalles_pedidos";
	$fdata["Label"] = GetFieldLabel("detalles_pedidos","creado_por");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "creado_por";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "creado_por";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "users";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "name";
	
	

	
	$edata["LookupOrderBy"] = "name";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatadetalles_pedidos["creado_por"] = $fdata;
//	actualizado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "actualizado_por";
	$fdata["GoodName"] = "actualizado_por";
	$fdata["ownerTable"] = "detalles_pedidos";
	$fdata["Label"] = GetFieldLabel("detalles_pedidos","actualizado_por");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "actualizado_por";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "actualizado_por";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "users";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "name";
	
	

	
	$edata["LookupOrderBy"] = "name";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatadetalles_pedidos["actualizado_por"] = $fdata;
//	creado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "creado";
	$fdata["GoodName"] = "creado";
	$fdata["ownerTable"] = "detalles_pedidos";
	$fdata["Label"] = GetFieldLabel("detalles_pedidos","creado");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "creado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "creado";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatadetalles_pedidos["creado"] = $fdata;
//	actualizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "actualizado";
	$fdata["GoodName"] = "actualizado";
	$fdata["ownerTable"] = "detalles_pedidos";
	$fdata["Label"] = GetFieldLabel("detalles_pedidos","actualizado");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "actualizado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "actualizado";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatadetalles_pedidos["actualizado"] = $fdata;


$tables_data["detalles_pedidos"]=&$tdatadetalles_pedidos;
$field_labels["detalles_pedidos"] = &$fieldLabelsdetalles_pedidos;
$fieldToolTips["detalles_pedidos"] = &$fieldToolTipsdetalles_pedidos;
$placeHolders["detalles_pedidos"] = &$placeHoldersdetalles_pedidos;
$page_titles["detalles_pedidos"] = &$pageTitlesdetalles_pedidos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["detalles_pedidos"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["detalles_pedidos"] = array();


	
				$strOriginalDetailsTable="empresas";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="empresas";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "empresas";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["detalles_pedidos"][0] = $masterParams;
				$masterTablesData["detalles_pedidos"][0]["masterKeys"] = array();
	$masterTablesData["detalles_pedidos"][0]["masterKeys"][]="id";
				$masterTablesData["detalles_pedidos"][0]["detailKeys"] = array();
	$masterTablesData["detalles_pedidos"][0]["detailKeys"][]="empresa_id";
		
	
				$strOriginalDetailsTable="items";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="items";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "items";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["detalles_pedidos"][1] = $masterParams;
				$masterTablesData["detalles_pedidos"][1]["masterKeys"] = array();
	$masterTablesData["detalles_pedidos"][1]["masterKeys"][]="id";
				$masterTablesData["detalles_pedidos"][1]["detailKeys"] = array();
	$masterTablesData["detalles_pedidos"][1]["detailKeys"][]="item_id";
		
	
				$strOriginalDetailsTable="pedidos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="pedidos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pedidos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["detalles_pedidos"][2] = $masterParams;
				$masterTablesData["detalles_pedidos"][2]["masterKeys"] = array();
	$masterTablesData["detalles_pedidos"][2]["masterKeys"][]="id";
				$masterTablesData["detalles_pedidos"][2]["detailKeys"] = array();
	$masterTablesData["detalles_pedidos"][2]["detailKeys"][]="pedido_id";
		
	
				$strOriginalDetailsTable="users";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="users";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "users";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	
		$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["detalles_pedidos"][3] = $masterParams;
				$masterTablesData["detalles_pedidos"][3]["masterKeys"] = array();
	$masterTablesData["detalles_pedidos"][3]["masterKeys"][]="id";
				$masterTablesData["detalles_pedidos"][3]["detailKeys"] = array();
	$masterTablesData["detalles_pedidos"][3]["detailKeys"][]="actualizado_por";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_detalles_pedidos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	cantidad,  	costo,  	pedido_id,  	item_id,  	empresa_id,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$proto0["m_strFrom"] = "FROM detalles_pedidos";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "detalles_pedidos",
	"m_srcTableName" => "detalles_pedidos"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "detalles_pedidos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad",
	"m_strTable" => "detalles_pedidos",
	"m_srcTableName" => "detalles_pedidos"
));

$proto8["m_sql"] = "cantidad";
$proto8["m_srcTableName"] = "detalles_pedidos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "costo",
	"m_strTable" => "detalles_pedidos",
	"m_srcTableName" => "detalles_pedidos"
));

$proto10["m_sql"] = "costo";
$proto10["m_srcTableName"] = "detalles_pedidos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "pedido_id",
	"m_strTable" => "detalles_pedidos",
	"m_srcTableName" => "detalles_pedidos"
));

$proto12["m_sql"] = "pedido_id";
$proto12["m_srcTableName"] = "detalles_pedidos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "item_id",
	"m_strTable" => "detalles_pedidos",
	"m_srcTableName" => "detalles_pedidos"
));

$proto14["m_sql"] = "item_id";
$proto14["m_srcTableName"] = "detalles_pedidos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "empresa_id",
	"m_strTable" => "detalles_pedidos",
	"m_srcTableName" => "detalles_pedidos"
));

$proto16["m_sql"] = "empresa_id";
$proto16["m_srcTableName"] = "detalles_pedidos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "creado_por",
	"m_strTable" => "detalles_pedidos",
	"m_srcTableName" => "detalles_pedidos"
));

$proto18["m_sql"] = "creado_por";
$proto18["m_srcTableName"] = "detalles_pedidos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado_por",
	"m_strTable" => "detalles_pedidos",
	"m_srcTableName" => "detalles_pedidos"
));

$proto20["m_sql"] = "actualizado_por";
$proto20["m_srcTableName"] = "detalles_pedidos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "creado",
	"m_strTable" => "detalles_pedidos",
	"m_srcTableName" => "detalles_pedidos"
));

$proto22["m_sql"] = "creado";
$proto22["m_srcTableName"] = "detalles_pedidos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado",
	"m_strTable" => "detalles_pedidos",
	"m_srcTableName" => "detalles_pedidos"
));

$proto24["m_sql"] = "actualizado";
$proto24["m_srcTableName"] = "detalles_pedidos";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "detalles_pedidos";
$proto27["m_srcTableName"] = "detalles_pedidos";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "cantidad";
$proto27["m_columns"][] = "costo";
$proto27["m_columns"][] = "pedido_id";
$proto27["m_columns"][] = "item_id";
$proto27["m_columns"][] = "empresa_id";
$proto27["m_columns"][] = "creado_por";
$proto27["m_columns"][] = "actualizado_por";
$proto27["m_columns"][] = "creado";
$proto27["m_columns"][] = "actualizado";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "detalles_pedidos";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "detalles_pedidos";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="detalles_pedidos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_detalles_pedidos = createSqlQuery_detalles_pedidos();


	
		;

										

$tdatadetalles_pedidos[".sqlquery"] = $queryData_detalles_pedidos;

$tableEvents["detalles_pedidos"] = new eventsBase;
$tdatadetalles_pedidos[".hasEvents"] = false;

?>