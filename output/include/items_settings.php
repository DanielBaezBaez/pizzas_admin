<?php
require_once(getabspath("classes/cipherer.php"));




$tdataitems = array();
	$tdataitems[".truncateText"] = true;
	$tdataitems[".NumberOfChars"] = 80;
	$tdataitems[".ShortName"] = "items";
	$tdataitems[".OwnerID"] = "empresa_id";
	$tdataitems[".OriginalTable"] = "items";

//	field labels
$fieldLabelsitems = array();
$fieldToolTipsitems = array();
$pageTitlesitems = array();
$placeHoldersitems = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsitems["Spanish"] = array();
	$fieldToolTipsitems["Spanish"] = array();
	$placeHoldersitems["Spanish"] = array();
	$pageTitlesitems["Spanish"] = array();
	$fieldLabelsitems["Spanish"]["id"] = "Id";
	$fieldToolTipsitems["Spanish"]["id"] = "";
	$placeHoldersitems["Spanish"]["id"] = "";
	$fieldLabelsitems["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipsitems["Spanish"]["descripcion"] = "";
	$placeHoldersitems["Spanish"]["descripcion"] = "";
	$fieldLabelsitems["Spanish"]["ingredientes_principales"] = "Ingredientes Principales";
	$fieldToolTipsitems["Spanish"]["ingredientes_principales"] = "";
	$placeHoldersitems["Spanish"]["ingredientes_principales"] = "";
	$fieldLabelsitems["Spanish"]["url_image"] = "Imagen";
	$fieldToolTipsitems["Spanish"]["url_image"] = "";
	$placeHoldersitems["Spanish"]["url_image"] = "";
	$fieldLabelsitems["Spanish"]["costo"] = "Costo";
	$fieldToolTipsitems["Spanish"]["costo"] = "";
	$placeHoldersitems["Spanish"]["costo"] = "";
	$fieldLabelsitems["Spanish"]["detalle"] = "Detalle";
	$fieldToolTipsitems["Spanish"]["detalle"] = "";
	$placeHoldersitems["Spanish"]["detalle"] = "";
	$fieldLabelsitems["Spanish"]["tipo_item_id"] = "Tipo Item";
	$fieldToolTipsitems["Spanish"]["tipo_item_id"] = "";
	$placeHoldersitems["Spanish"]["tipo_item_id"] = "";
	$fieldLabelsitems["Spanish"]["empresa_id"] = "Empresa";
	$fieldToolTipsitems["Spanish"]["empresa_id"] = "";
	$placeHoldersitems["Spanish"]["empresa_id"] = "";
	$fieldLabelsitems["Spanish"]["creado_por"] = "Creado Por";
	$fieldToolTipsitems["Spanish"]["creado_por"] = "";
	$placeHoldersitems["Spanish"]["creado_por"] = "";
	$fieldLabelsitems["Spanish"]["actualizado_por"] = "Actualizado Por";
	$fieldToolTipsitems["Spanish"]["actualizado_por"] = "";
	$placeHoldersitems["Spanish"]["actualizado_por"] = "";
	$fieldLabelsitems["Spanish"]["creado"] = "Creado";
	$fieldToolTipsitems["Spanish"]["creado"] = "";
	$placeHoldersitems["Spanish"]["creado"] = "";
	$fieldLabelsitems["Spanish"]["actualizado"] = "Actualizado";
	$fieldToolTipsitems["Spanish"]["actualizado"] = "";
	$placeHoldersitems["Spanish"]["actualizado"] = "";
	if (count($fieldToolTipsitems["Spanish"]))
		$tdataitems[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsitems[""] = array();
	$fieldToolTipsitems[""] = array();
	$placeHoldersitems[""] = array();
	$pageTitlesitems[""] = array();
	if (count($fieldToolTipsitems[""]))
		$tdataitems[".isUseToolTips"] = true;
}


	$tdataitems[".NCSearch"] = true;



$tdataitems[".shortTableName"] = "items";
$tdataitems[".nSecOptions"] = 1;
$tdataitems[".recsPerRowPrint"] = 1;
$tdataitems[".mainTableOwnerID"] = "empresa_id";
$tdataitems[".moveNext"] = 1;
$tdataitems[".entityType"] = 0;

$tdataitems[".strOriginalTableName"] = "items";

	



$tdataitems[".showAddInPopup"] = false;

$tdataitems[".showEditInPopup"] = false;

$tdataitems[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataitems[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataitems[".fieldsForRegister"] = array();

$tdataitems[".listAjax"] = false;

	$tdataitems[".audit"] = false;

	$tdataitems[".locking"] = false;

$tdataitems[".edit"] = true;
$tdataitems[".afterEditAction"] = 1;
$tdataitems[".closePopupAfterEdit"] = 1;
$tdataitems[".afterEditActionDetTable"] = "";

$tdataitems[".add"] = true;
$tdataitems[".afterAddAction"] = 1;
$tdataitems[".closePopupAfterAdd"] = 1;
$tdataitems[".afterAddActionDetTable"] = "";

$tdataitems[".list"] = true;



$tdataitems[".reorderRecordsByHeader"] = true;


$tdataitems[".exportFormatting"] = 2;
$tdataitems[".exportDelimiter"] = ",";
		
$tdataitems[".view"] = true;

$tdataitems[".import"] = true;

$tdataitems[".exportTo"] = true;

$tdataitems[".printFriendly"] = true;

$tdataitems[".delete"] = true;

$tdataitems[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataitems[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataitems[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataitems[".searchSaving"] = false;
//

$tdataitems[".showSearchPanel"] = true;
		$tdataitems[".flexibleSearch"] = true;

$tdataitems[".isUseAjaxSuggest"] = true;

$tdataitems[".rowHighlite"] = true;





$tdataitems[".ajaxCodeSnippetAdded"] = false;

$tdataitems[".buttonsAdded"] = false;

$tdataitems[".addPageEvents"] = false;

// use timepicker for search panel
$tdataitems[".isUseTimeForSearch"] = false;



$tdataitems[".badgeColor"] = "CD853F";


$tdataitems[".allSearchFields"] = array();
$tdataitems[".filterFields"] = array();
$tdataitems[".requiredSearchFields"] = array();

$tdataitems[".allSearchFields"][] = "descripcion";
	$tdataitems[".allSearchFields"][] = "costo";
	$tdataitems[".allSearchFields"][] = "tipo_item_id";
	$tdataitems[".allSearchFields"][] = "url_image";
	$tdataitems[".allSearchFields"][] = "ingredientes_principales";
	$tdataitems[".allSearchFields"][] = "detalle";
	

$tdataitems[".googleLikeFields"] = array();
$tdataitems[".googleLikeFields"][] = "id";
$tdataitems[".googleLikeFields"][] = "descripcion";
$tdataitems[".googleLikeFields"][] = "ingredientes_principales";
$tdataitems[".googleLikeFields"][] = "url_image";
$tdataitems[".googleLikeFields"][] = "costo";
$tdataitems[".googleLikeFields"][] = "detalle";
$tdataitems[".googleLikeFields"][] = "tipo_item_id";
$tdataitems[".googleLikeFields"][] = "empresa_id";
$tdataitems[".googleLikeFields"][] = "creado_por";
$tdataitems[".googleLikeFields"][] = "actualizado_por";
$tdataitems[".googleLikeFields"][] = "creado";
$tdataitems[".googleLikeFields"][] = "actualizado";


$tdataitems[".advSearchFields"] = array();
$tdataitems[".advSearchFields"][] = "descripcion";
$tdataitems[".advSearchFields"][] = "costo";
$tdataitems[".advSearchFields"][] = "tipo_item_id";
$tdataitems[".advSearchFields"][] = "url_image";
$tdataitems[".advSearchFields"][] = "ingredientes_principales";
$tdataitems[".advSearchFields"][] = "detalle";

$tdataitems[".tableType"] = "list";

$tdataitems[".printerPageOrientation"] = 0;
$tdataitems[".nPrinterPageScale"] = 100;

$tdataitems[".nPrinterSplitRecords"] = 40;

$tdataitems[".nPrinterPDFSplitRecords"] = 40;



$tdataitems[".geocodingEnabled"] = false;





$tdataitems[".listGridLayout"] = 3;


$tdataitems[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataitems[".pageSize"] = 20;

$tdataitems[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataitems[".strOrderBy"] = $tstrOrderBy;

$tdataitems[".orderindexes"] = array();

$tdataitems[".sqlHead"] = "SELECT id,  	descripcion,  	ingredientes_principales,  	url_image,  	costo,  	detalle,  	tipo_item_id,  	empresa_id,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$tdataitems[".sqlFrom"] = "FROM items";
$tdataitems[".sqlWhereExpr"] = "";
$tdataitems[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataitems[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataitems[".arrGroupsPerPage"] = $arrGPP;

$tdataitems[".highlightSearchResults"] = true;

$tableKeysitems = array();
$tableKeysitems[] = "id";
$tdataitems[".Keys"] = $tableKeysitems;

$tdataitems[".listFields"] = array();
$tdataitems[".listFields"][] = "descripcion";
$tdataitems[".listFields"][] = "costo";
$tdataitems[".listFields"][] = "tipo_item_id";
$tdataitems[".listFields"][] = "url_image";
$tdataitems[".listFields"][] = "ingredientes_principales";
$tdataitems[".listFields"][] = "detalle";
$tdataitems[".listFields"][] = "creado_por";
$tdataitems[".listFields"][] = "actualizado_por";
$tdataitems[".listFields"][] = "creado";
$tdataitems[".listFields"][] = "actualizado";

$tdataitems[".hideMobileList"] = array();


$tdataitems[".viewFields"] = array();
$tdataitems[".viewFields"][] = "descripcion";
$tdataitems[".viewFields"][] = "costo";
$tdataitems[".viewFields"][] = "tipo_item_id";
$tdataitems[".viewFields"][] = "url_image";
$tdataitems[".viewFields"][] = "ingredientes_principales";
$tdataitems[".viewFields"][] = "detalle";

$tdataitems[".addFields"] = array();
$tdataitems[".addFields"][] = "descripcion";
$tdataitems[".addFields"][] = "costo";
$tdataitems[".addFields"][] = "tipo_item_id";
$tdataitems[".addFields"][] = "url_image";
$tdataitems[".addFields"][] = "ingredientes_principales";
$tdataitems[".addFields"][] = "detalle";

$tdataitems[".masterListFields"] = array();
$tdataitems[".masterListFields"][] = "descripcion";
$tdataitems[".masterListFields"][] = "costo";
$tdataitems[".masterListFields"][] = "tipo_item_id";
$tdataitems[".masterListFields"][] = "url_image";
$tdataitems[".masterListFields"][] = "ingredientes_principales";
$tdataitems[".masterListFields"][] = "detalle";

$tdataitems[".inlineAddFields"] = array();

$tdataitems[".editFields"] = array();
$tdataitems[".editFields"][] = "descripcion";
$tdataitems[".editFields"][] = "costo";
$tdataitems[".editFields"][] = "tipo_item_id";
$tdataitems[".editFields"][] = "url_image";
$tdataitems[".editFields"][] = "ingredientes_principales";
$tdataitems[".editFields"][] = "detalle";

$tdataitems[".inlineEditFields"] = array();

$tdataitems[".updateSelectedFields"] = array();
$tdataitems[".updateSelectedFields"][] = "descripcion";
$tdataitems[".updateSelectedFields"][] = "costo";
$tdataitems[".updateSelectedFields"][] = "tipo_item_id";
$tdataitems[".updateSelectedFields"][] = "url_image";
$tdataitems[".updateSelectedFields"][] = "ingredientes_principales";
$tdataitems[".updateSelectedFields"][] = "detalle";


$tdataitems[".exportFields"] = array();
$tdataitems[".exportFields"][] = "descripcion";
$tdataitems[".exportFields"][] = "costo";
$tdataitems[".exportFields"][] = "tipo_item_id";
$tdataitems[".exportFields"][] = "url_image";
$tdataitems[".exportFields"][] = "ingredientes_principales";
$tdataitems[".exportFields"][] = "detalle";

$tdataitems[".importFields"] = array();
$tdataitems[".importFields"][] = "descripcion";
$tdataitems[".importFields"][] = "ingredientes_principales";
$tdataitems[".importFields"][] = "url_image";
$tdataitems[".importFields"][] = "costo";
$tdataitems[".importFields"][] = "detalle";
$tdataitems[".importFields"][] = "tipo_item_id";

$tdataitems[".printFields"] = array();
$tdataitems[".printFields"][] = "descripcion";
$tdataitems[".printFields"][] = "costo";
$tdataitems[".printFields"][] = "tipo_item_id";
$tdataitems[".printFields"][] = "url_image";
$tdataitems[".printFields"][] = "ingredientes_principales";
$tdataitems[".printFields"][] = "detalle";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "items";
	$fdata["Label"] = GetFieldLabel("items","id");
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








	$tdataitems["id"] = $fdata;
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "items";
	$fdata["Label"] = GetFieldLabel("items","descripcion");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "descripcion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion";

	
	
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

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=191";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataitems["descripcion"] = $fdata;
//	ingredientes_principales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ingredientes_principales";
	$fdata["GoodName"] = "ingredientes_principales";
	$fdata["ownerTable"] = "items";
	$fdata["Label"] = GetFieldLabel("items","ingredientes_principales");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ingredientes_principales";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ingredientes_principales";

	
	
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

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=191";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataitems["ingredientes_principales"] = $fdata;
//	url_image
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "url_image";
	$fdata["GoodName"] = "url_image";
	$fdata["ownerTable"] = "items";
	$fdata["Label"] = GetFieldLabel("items","url_image");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "url_image";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "url_image";

	
	
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

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=191";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataitems["url_image"] = $fdata;
//	costo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "costo";
	$fdata["GoodName"] = "costo";
	$fdata["ownerTable"] = "items";
	$fdata["Label"] = GetFieldLabel("items","costo");
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

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataitems["costo"] = $fdata;
//	detalle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "detalle";
	$fdata["GoodName"] = "detalle";
	$fdata["ownerTable"] = "items";
	$fdata["Label"] = GetFieldLabel("items","detalle");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "detalle";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "detalle";

	
	
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

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=191";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataitems["detalle"] = $fdata;
//	tipo_item_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "tipo_item_id";
	$fdata["GoodName"] = "tipo_item_id";
	$fdata["ownerTable"] = "items";
	$fdata["Label"] = GetFieldLabel("items","tipo_item_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tipo_item_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_item_id";

	
	
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
	$edata["LookupTable"] = "tipo_items";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "descripcion";
	
	

	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataitems["tipo_item_id"] = $fdata;
//	empresa_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "empresa_id";
	$fdata["GoodName"] = "empresa_id";
	$fdata["ownerTable"] = "items";
	$fdata["Label"] = GetFieldLabel("items","empresa_id");
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
	$edata["DisplayField"] = "descripcion";
	
	

	
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








	$tdataitems["empresa_id"] = $fdata;
//	creado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "creado_por";
	$fdata["GoodName"] = "creado_por";
	$fdata["ownerTable"] = "items";
	$fdata["Label"] = GetFieldLabel("items","creado_por");
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








	$tdataitems["creado_por"] = $fdata;
//	actualizado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "actualizado_por";
	$fdata["GoodName"] = "actualizado_por";
	$fdata["ownerTable"] = "items";
	$fdata["Label"] = GetFieldLabel("items","actualizado_por");
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
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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








	$tdataitems["actualizado_por"] = $fdata;
//	creado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "creado";
	$fdata["GoodName"] = "creado";
	$fdata["ownerTable"] = "items";
	$fdata["Label"] = GetFieldLabel("items","creado");
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








	$tdataitems["creado"] = $fdata;
//	actualizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "actualizado";
	$fdata["GoodName"] = "actualizado";
	$fdata["ownerTable"] = "items";
	$fdata["Label"] = GetFieldLabel("items","actualizado");
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








	$tdataitems["actualizado"] = $fdata;


$tables_data["items"]=&$tdataitems;
$field_labels["items"] = &$fieldLabelsitems;
$fieldToolTips["items"] = &$fieldToolTipsitems;
$placeHolders["items"] = &$placeHoldersitems;
$page_titles["items"] = &$pageTitlesitems;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["items"] = array();
//	detalles_pedidos
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="detalles_pedidos";
		$detailsParam["dOriginalTable"] = "detalles_pedidos";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "detalles_pedidos";
	$detailsParam["dCaptionTable"] = GetTableCaption("detalles_pedidos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["items"][$dIndex] = $detailsParam;

	
		$detailsTablesData["items"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["items"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["items"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["items"][$dIndex]["detailKeys"][]="item_id";

// tables which are master tables for current table (detail)
$masterTablesData["items"] = array();


	
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
					$masterTablesData["items"][0] = $masterParams;
				$masterTablesData["items"][0]["masterKeys"] = array();
	$masterTablesData["items"][0]["masterKeys"][]="id";
				$masterTablesData["items"][0]["detailKeys"] = array();
	$masterTablesData["items"][0]["detailKeys"][]="empresa_id";
		
	
				$strOriginalDetailsTable="tipo_items";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tipo_items";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tipo_items";
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
					$masterTablesData["items"][1] = $masterParams;
				$masterTablesData["items"][1]["masterKeys"] = array();
	$masterTablesData["items"][1]["masterKeys"][]="id";
				$masterTablesData["items"][1]["detailKeys"] = array();
	$masterTablesData["items"][1]["detailKeys"][]="tipo_item_id";
		
	
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
					$masterTablesData["items"][2] = $masterParams;
				$masterTablesData["items"][2]["masterKeys"] = array();
	$masterTablesData["items"][2]["masterKeys"][]="id";
				$masterTablesData["items"][2]["detailKeys"] = array();
	$masterTablesData["items"][2]["detailKeys"][]="actualizado_por";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_items()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	descripcion,  	ingredientes_principales,  	url_image,  	costo,  	detalle,  	tipo_item_id,  	empresa_id,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$proto0["m_strFrom"] = "FROM items";
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
	"m_strTable" => "items",
	"m_srcTableName" => "items"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "items";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "items",
	"m_srcTableName" => "items"
));

$proto8["m_sql"] = "descripcion";
$proto8["m_srcTableName"] = "items";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ingredientes_principales",
	"m_strTable" => "items",
	"m_srcTableName" => "items"
));

$proto10["m_sql"] = "ingredientes_principales";
$proto10["m_srcTableName"] = "items";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "url_image",
	"m_strTable" => "items",
	"m_srcTableName" => "items"
));

$proto12["m_sql"] = "url_image";
$proto12["m_srcTableName"] = "items";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "costo",
	"m_strTable" => "items",
	"m_srcTableName" => "items"
));

$proto14["m_sql"] = "costo";
$proto14["m_srcTableName"] = "items";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "detalle",
	"m_strTable" => "items",
	"m_srcTableName" => "items"
));

$proto16["m_sql"] = "detalle";
$proto16["m_srcTableName"] = "items";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_item_id",
	"m_strTable" => "items",
	"m_srcTableName" => "items"
));

$proto18["m_sql"] = "tipo_item_id";
$proto18["m_srcTableName"] = "items";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "empresa_id",
	"m_strTable" => "items",
	"m_srcTableName" => "items"
));

$proto20["m_sql"] = "empresa_id";
$proto20["m_srcTableName"] = "items";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "creado_por",
	"m_strTable" => "items",
	"m_srcTableName" => "items"
));

$proto22["m_sql"] = "creado_por";
$proto22["m_srcTableName"] = "items";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado_por",
	"m_strTable" => "items",
	"m_srcTableName" => "items"
));

$proto24["m_sql"] = "actualizado_por";
$proto24["m_srcTableName"] = "items";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "creado",
	"m_strTable" => "items",
	"m_srcTableName" => "items"
));

$proto26["m_sql"] = "creado";
$proto26["m_srcTableName"] = "items";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado",
	"m_strTable" => "items",
	"m_srcTableName" => "items"
));

$proto28["m_sql"] = "actualizado";
$proto28["m_srcTableName"] = "items";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "items";
$proto31["m_srcTableName"] = "items";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id";
$proto31["m_columns"][] = "descripcion";
$proto31["m_columns"][] = "ingredientes_principales";
$proto31["m_columns"][] = "url_image";
$proto31["m_columns"][] = "costo";
$proto31["m_columns"][] = "detalle";
$proto31["m_columns"][] = "tipo_item_id";
$proto31["m_columns"][] = "empresa_id";
$proto31["m_columns"][] = "creado_por";
$proto31["m_columns"][] = "actualizado_por";
$proto31["m_columns"][] = "creado";
$proto31["m_columns"][] = "actualizado";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "items";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "items";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="items";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_items = createSqlQuery_items();


	
		;

												

$tdataitems[".sqlquery"] = $queryData_items;

$tableEvents["items"] = new eventsBase;
$tdataitems[".hasEvents"] = false;

?>