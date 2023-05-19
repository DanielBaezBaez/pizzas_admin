<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadetalles_facturas = array();
	$tdatadetalles_facturas[".truncateText"] = true;
	$tdatadetalles_facturas[".NumberOfChars"] = 80;
	$tdatadetalles_facturas[".ShortName"] = "detalles_facturas";
	$tdatadetalles_facturas[".OwnerID"] = "empresa_id";
	$tdatadetalles_facturas[".OriginalTable"] = "detalles_facturas";

//	field labels
$fieldLabelsdetalles_facturas = array();
$fieldToolTipsdetalles_facturas = array();
$pageTitlesdetalles_facturas = array();
$placeHoldersdetalles_facturas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdetalles_facturas["Spanish"] = array();
	$fieldToolTipsdetalles_facturas["Spanish"] = array();
	$placeHoldersdetalles_facturas["Spanish"] = array();
	$pageTitlesdetalles_facturas["Spanish"] = array();
	$fieldLabelsdetalles_facturas["Spanish"]["id"] = "Id";
	$fieldToolTipsdetalles_facturas["Spanish"]["id"] = "";
	$placeHoldersdetalles_facturas["Spanish"]["id"] = "";
	$fieldLabelsdetalles_facturas["Spanish"]["factura_id"] = "Factura";
	$fieldToolTipsdetalles_facturas["Spanish"]["factura_id"] = "";
	$placeHoldersdetalles_facturas["Spanish"]["factura_id"] = "";
	$fieldLabelsdetalles_facturas["Spanish"]["empresa_id"] = "Empresa";
	$fieldToolTipsdetalles_facturas["Spanish"]["empresa_id"] = "";
	$placeHoldersdetalles_facturas["Spanish"]["empresa_id"] = "";
	$fieldLabelsdetalles_facturas["Spanish"]["creado_por"] = "Creado Por";
	$fieldToolTipsdetalles_facturas["Spanish"]["creado_por"] = "";
	$placeHoldersdetalles_facturas["Spanish"]["creado_por"] = "";
	$fieldLabelsdetalles_facturas["Spanish"]["actualizado_por"] = "Actualizado Por";
	$fieldToolTipsdetalles_facturas["Spanish"]["actualizado_por"] = "";
	$placeHoldersdetalles_facturas["Spanish"]["actualizado_por"] = "";
	$fieldLabelsdetalles_facturas["Spanish"]["creado"] = "Creado";
	$fieldToolTipsdetalles_facturas["Spanish"]["creado"] = "";
	$placeHoldersdetalles_facturas["Spanish"]["creado"] = "";
	$fieldLabelsdetalles_facturas["Spanish"]["actualizado"] = "Actualizado";
	$fieldToolTipsdetalles_facturas["Spanish"]["actualizado"] = "";
	$placeHoldersdetalles_facturas["Spanish"]["actualizado"] = "";
	if (count($fieldToolTipsdetalles_facturas["Spanish"]))
		$tdatadetalles_facturas[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdetalles_facturas[""] = array();
	$fieldToolTipsdetalles_facturas[""] = array();
	$placeHoldersdetalles_facturas[""] = array();
	$pageTitlesdetalles_facturas[""] = array();
	if (count($fieldToolTipsdetalles_facturas[""]))
		$tdatadetalles_facturas[".isUseToolTips"] = true;
}


	$tdatadetalles_facturas[".NCSearch"] = true;



$tdatadetalles_facturas[".shortTableName"] = "detalles_facturas";
$tdatadetalles_facturas[".nSecOptions"] = 1;
$tdatadetalles_facturas[".recsPerRowPrint"] = 1;
$tdatadetalles_facturas[".mainTableOwnerID"] = "empresa_id";
$tdatadetalles_facturas[".moveNext"] = 1;
$tdatadetalles_facturas[".entityType"] = 0;

$tdatadetalles_facturas[".strOriginalTableName"] = "detalles_facturas";

	



$tdatadetalles_facturas[".showAddInPopup"] = false;

$tdatadetalles_facturas[".showEditInPopup"] = false;

$tdatadetalles_facturas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadetalles_facturas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadetalles_facturas[".fieldsForRegister"] = array();

$tdatadetalles_facturas[".listAjax"] = false;

	$tdatadetalles_facturas[".audit"] = false;

	$tdatadetalles_facturas[".locking"] = false;

$tdatadetalles_facturas[".edit"] = true;
$tdatadetalles_facturas[".afterEditAction"] = 1;
$tdatadetalles_facturas[".closePopupAfterEdit"] = 1;
$tdatadetalles_facturas[".afterEditActionDetTable"] = "";

$tdatadetalles_facturas[".add"] = true;
$tdatadetalles_facturas[".afterAddAction"] = 1;
$tdatadetalles_facturas[".closePopupAfterAdd"] = 1;
$tdatadetalles_facturas[".afterAddActionDetTable"] = "";

$tdatadetalles_facturas[".list"] = true;



$tdatadetalles_facturas[".reorderRecordsByHeader"] = true;


$tdatadetalles_facturas[".exportFormatting"] = 2;
$tdatadetalles_facturas[".exportDelimiter"] = ",";
		
$tdatadetalles_facturas[".view"] = true;

$tdatadetalles_facturas[".import"] = true;

$tdatadetalles_facturas[".exportTo"] = true;

$tdatadetalles_facturas[".printFriendly"] = true;

$tdatadetalles_facturas[".delete"] = true;

$tdatadetalles_facturas[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatadetalles_facturas[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatadetalles_facturas[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatadetalles_facturas[".searchSaving"] = false;
//

$tdatadetalles_facturas[".showSearchPanel"] = true;
		$tdatadetalles_facturas[".flexibleSearch"] = true;

$tdatadetalles_facturas[".isUseAjaxSuggest"] = true;

$tdatadetalles_facturas[".rowHighlite"] = true;





$tdatadetalles_facturas[".ajaxCodeSnippetAdded"] = false;

$tdatadetalles_facturas[".buttonsAdded"] = false;

$tdatadetalles_facturas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadetalles_facturas[".isUseTimeForSearch"] = false;



$tdatadetalles_facturas[".badgeColor"] = "778899";


$tdatadetalles_facturas[".allSearchFields"] = array();
$tdatadetalles_facturas[".filterFields"] = array();
$tdatadetalles_facturas[".requiredSearchFields"] = array();

$tdatadetalles_facturas[".allSearchFields"][] = "factura_id";
	$tdatadetalles_facturas[".allSearchFields"][] = "empresa_id";
	$tdatadetalles_facturas[".allSearchFields"][] = "creado_por";
	$tdatadetalles_facturas[".allSearchFields"][] = "actualizado_por";
	$tdatadetalles_facturas[".allSearchFields"][] = "creado";
	$tdatadetalles_facturas[".allSearchFields"][] = "actualizado";
	

$tdatadetalles_facturas[".googleLikeFields"] = array();
$tdatadetalles_facturas[".googleLikeFields"][] = "id";
$tdatadetalles_facturas[".googleLikeFields"][] = "factura_id";
$tdatadetalles_facturas[".googleLikeFields"][] = "empresa_id";
$tdatadetalles_facturas[".googleLikeFields"][] = "creado_por";
$tdatadetalles_facturas[".googleLikeFields"][] = "actualizado_por";
$tdatadetalles_facturas[".googleLikeFields"][] = "creado";
$tdatadetalles_facturas[".googleLikeFields"][] = "actualizado";


$tdatadetalles_facturas[".advSearchFields"] = array();
$tdatadetalles_facturas[".advSearchFields"][] = "factura_id";
$tdatadetalles_facturas[".advSearchFields"][] = "empresa_id";
$tdatadetalles_facturas[".advSearchFields"][] = "creado_por";
$tdatadetalles_facturas[".advSearchFields"][] = "actualizado_por";
$tdatadetalles_facturas[".advSearchFields"][] = "creado";
$tdatadetalles_facturas[".advSearchFields"][] = "actualizado";

$tdatadetalles_facturas[".tableType"] = "list";

$tdatadetalles_facturas[".printerPageOrientation"] = 0;
$tdatadetalles_facturas[".nPrinterPageScale"] = 100;

$tdatadetalles_facturas[".nPrinterSplitRecords"] = 40;

$tdatadetalles_facturas[".nPrinterPDFSplitRecords"] = 40;



$tdatadetalles_facturas[".geocodingEnabled"] = false;





$tdatadetalles_facturas[".listGridLayout"] = 3;


$tdatadetalles_facturas[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdatadetalles_facturas[".pageSize"] = 20;

$tdatadetalles_facturas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadetalles_facturas[".strOrderBy"] = $tstrOrderBy;

$tdatadetalles_facturas[".orderindexes"] = array();

$tdatadetalles_facturas[".sqlHead"] = "SELECT id,  	factura_id,  	empresa_id,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$tdatadetalles_facturas[".sqlFrom"] = "FROM detalles_facturas";
$tdatadetalles_facturas[".sqlWhereExpr"] = "";
$tdatadetalles_facturas[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadetalles_facturas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadetalles_facturas[".arrGroupsPerPage"] = $arrGPP;

$tdatadetalles_facturas[".highlightSearchResults"] = true;

$tableKeysdetalles_facturas = array();
$tableKeysdetalles_facturas[] = "id";
$tdatadetalles_facturas[".Keys"] = $tableKeysdetalles_facturas;

$tdatadetalles_facturas[".listFields"] = array();
$tdatadetalles_facturas[".listFields"][] = "factura_id";
$tdatadetalles_facturas[".listFields"][] = "empresa_id";
$tdatadetalles_facturas[".listFields"][] = "creado_por";
$tdatadetalles_facturas[".listFields"][] = "actualizado_por";
$tdatadetalles_facturas[".listFields"][] = "creado";
$tdatadetalles_facturas[".listFields"][] = "actualizado";

$tdatadetalles_facturas[".hideMobileList"] = array();


$tdatadetalles_facturas[".viewFields"] = array();
$tdatadetalles_facturas[".viewFields"][] = "factura_id";
$tdatadetalles_facturas[".viewFields"][] = "empresa_id";
$tdatadetalles_facturas[".viewFields"][] = "creado_por";
$tdatadetalles_facturas[".viewFields"][] = "actualizado_por";
$tdatadetalles_facturas[".viewFields"][] = "creado";
$tdatadetalles_facturas[".viewFields"][] = "actualizado";

$tdatadetalles_facturas[".addFields"] = array();
$tdatadetalles_facturas[".addFields"][] = "factura_id";
$tdatadetalles_facturas[".addFields"][] = "creado_por";
$tdatadetalles_facturas[".addFields"][] = "actualizado_por";
$tdatadetalles_facturas[".addFields"][] = "creado";
$tdatadetalles_facturas[".addFields"][] = "actualizado";

$tdatadetalles_facturas[".masterListFields"] = array();
$tdatadetalles_facturas[".masterListFields"][] = "id";
$tdatadetalles_facturas[".masterListFields"][] = "factura_id";
$tdatadetalles_facturas[".masterListFields"][] = "empresa_id";
$tdatadetalles_facturas[".masterListFields"][] = "creado_por";
$tdatadetalles_facturas[".masterListFields"][] = "actualizado_por";
$tdatadetalles_facturas[".masterListFields"][] = "creado";
$tdatadetalles_facturas[".masterListFields"][] = "actualizado";

$tdatadetalles_facturas[".inlineAddFields"] = array();

$tdatadetalles_facturas[".editFields"] = array();
$tdatadetalles_facturas[".editFields"][] = "factura_id";
$tdatadetalles_facturas[".editFields"][] = "empresa_id";
$tdatadetalles_facturas[".editFields"][] = "creado_por";
$tdatadetalles_facturas[".editFields"][] = "actualizado_por";
$tdatadetalles_facturas[".editFields"][] = "creado";
$tdatadetalles_facturas[".editFields"][] = "actualizado";

$tdatadetalles_facturas[".inlineEditFields"] = array();

$tdatadetalles_facturas[".updateSelectedFields"] = array();
$tdatadetalles_facturas[".updateSelectedFields"][] = "factura_id";
$tdatadetalles_facturas[".updateSelectedFields"][] = "empresa_id";
$tdatadetalles_facturas[".updateSelectedFields"][] = "creado_por";
$tdatadetalles_facturas[".updateSelectedFields"][] = "actualizado_por";
$tdatadetalles_facturas[".updateSelectedFields"][] = "creado";
$tdatadetalles_facturas[".updateSelectedFields"][] = "actualizado";


$tdatadetalles_facturas[".exportFields"] = array();
$tdatadetalles_facturas[".exportFields"][] = "factura_id";
$tdatadetalles_facturas[".exportFields"][] = "empresa_id";
$tdatadetalles_facturas[".exportFields"][] = "creado_por";
$tdatadetalles_facturas[".exportFields"][] = "actualizado_por";
$tdatadetalles_facturas[".exportFields"][] = "creado";
$tdatadetalles_facturas[".exportFields"][] = "actualizado";

$tdatadetalles_facturas[".importFields"] = array();
$tdatadetalles_facturas[".importFields"][] = "factura_id";
$tdatadetalles_facturas[".importFields"][] = "empresa_id";
$tdatadetalles_facturas[".importFields"][] = "creado_por";
$tdatadetalles_facturas[".importFields"][] = "actualizado_por";
$tdatadetalles_facturas[".importFields"][] = "creado";
$tdatadetalles_facturas[".importFields"][] = "actualizado";

$tdatadetalles_facturas[".printFields"] = array();
$tdatadetalles_facturas[".printFields"][] = "factura_id";
$tdatadetalles_facturas[".printFields"][] = "empresa_id";
$tdatadetalles_facturas[".printFields"][] = "creado_por";
$tdatadetalles_facturas[".printFields"][] = "actualizado_por";
$tdatadetalles_facturas[".printFields"][] = "creado";
$tdatadetalles_facturas[".printFields"][] = "actualizado";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "detalles_facturas";
	$fdata["Label"] = GetFieldLabel("detalles_facturas","id");
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








	$tdatadetalles_facturas["id"] = $fdata;
//	factura_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "factura_id";
	$fdata["GoodName"] = "factura_id";
	$fdata["ownerTable"] = "detalles_facturas";
	$fdata["Label"] = GetFieldLabel("detalles_facturas","factura_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "factura_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "factura_id";

	
	
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
	$edata["LookupTable"] = "facturas";
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadetalles_facturas["factura_id"] = $fdata;
//	empresa_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "empresa_id";
	$fdata["GoodName"] = "empresa_id";
	$fdata["ownerTable"] = "detalles_facturas";
	$fdata["Label"] = GetFieldLabel("detalles_facturas","empresa_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "empresa_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "empresa_id";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadetalles_facturas["empresa_id"] = $fdata;
//	creado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "creado_por";
	$fdata["GoodName"] = "creado_por";
	$fdata["ownerTable"] = "detalles_facturas";
	$fdata["Label"] = GetFieldLabel("detalles_facturas","creado_por");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadetalles_facturas["creado_por"] = $fdata;
//	actualizado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "actualizado_por";
	$fdata["GoodName"] = "actualizado_por";
	$fdata["ownerTable"] = "detalles_facturas";
	$fdata["Label"] = GetFieldLabel("detalles_facturas","actualizado_por");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadetalles_facturas["actualizado_por"] = $fdata;
//	creado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "creado";
	$fdata["GoodName"] = "creado";
	$fdata["ownerTable"] = "detalles_facturas";
	$fdata["Label"] = GetFieldLabel("detalles_facturas","creado");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatadetalles_facturas["creado"] = $fdata;
//	actualizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "actualizado";
	$fdata["GoodName"] = "actualizado";
	$fdata["ownerTable"] = "detalles_facturas";
	$fdata["Label"] = GetFieldLabel("detalles_facturas","actualizado");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatadetalles_facturas["actualizado"] = $fdata;


$tables_data["detalles_facturas"]=&$tdatadetalles_facturas;
$field_labels["detalles_facturas"] = &$fieldLabelsdetalles_facturas;
$fieldToolTips["detalles_facturas"] = &$fieldToolTipsdetalles_facturas;
$placeHolders["detalles_facturas"] = &$placeHoldersdetalles_facturas;
$page_titles["detalles_facturas"] = &$pageTitlesdetalles_facturas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["detalles_facturas"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["detalles_facturas"] = array();


	
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
					$masterTablesData["detalles_facturas"][0] = $masterParams;
				$masterTablesData["detalles_facturas"][0]["masterKeys"] = array();
	$masterTablesData["detalles_facturas"][0]["masterKeys"][]="id";
				$masterTablesData["detalles_facturas"][0]["detailKeys"] = array();
	$masterTablesData["detalles_facturas"][0]["detailKeys"][]="empresa_id";
		
	
				$strOriginalDetailsTable="facturas";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="facturas";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "facturas";
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
					$masterTablesData["detalles_facturas"][1] = $masterParams;
				$masterTablesData["detalles_facturas"][1]["masterKeys"] = array();
	$masterTablesData["detalles_facturas"][1]["masterKeys"][]="id";
				$masterTablesData["detalles_facturas"][1]["detailKeys"] = array();
	$masterTablesData["detalles_facturas"][1]["detailKeys"][]="factura_id";
		
	
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
					$masterTablesData["detalles_facturas"][2] = $masterParams;
				$masterTablesData["detalles_facturas"][2]["masterKeys"] = array();
	$masterTablesData["detalles_facturas"][2]["masterKeys"][]="id";
				$masterTablesData["detalles_facturas"][2]["detailKeys"] = array();
	$masterTablesData["detalles_facturas"][2]["detailKeys"][]="actualizado_por";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_detalles_facturas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	factura_id,  	empresa_id,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$proto0["m_strFrom"] = "FROM detalles_facturas";
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
	"m_strTable" => "detalles_facturas",
	"m_srcTableName" => "detalles_facturas"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "detalles_facturas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "factura_id",
	"m_strTable" => "detalles_facturas",
	"m_srcTableName" => "detalles_facturas"
));

$proto8["m_sql"] = "factura_id";
$proto8["m_srcTableName"] = "detalles_facturas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "empresa_id",
	"m_strTable" => "detalles_facturas",
	"m_srcTableName" => "detalles_facturas"
));

$proto10["m_sql"] = "empresa_id";
$proto10["m_srcTableName"] = "detalles_facturas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "creado_por",
	"m_strTable" => "detalles_facturas",
	"m_srcTableName" => "detalles_facturas"
));

$proto12["m_sql"] = "creado_por";
$proto12["m_srcTableName"] = "detalles_facturas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado_por",
	"m_strTable" => "detalles_facturas",
	"m_srcTableName" => "detalles_facturas"
));

$proto14["m_sql"] = "actualizado_por";
$proto14["m_srcTableName"] = "detalles_facturas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "creado",
	"m_strTable" => "detalles_facturas",
	"m_srcTableName" => "detalles_facturas"
));

$proto16["m_sql"] = "creado";
$proto16["m_srcTableName"] = "detalles_facturas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado",
	"m_strTable" => "detalles_facturas",
	"m_srcTableName" => "detalles_facturas"
));

$proto18["m_sql"] = "actualizado";
$proto18["m_srcTableName"] = "detalles_facturas";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "detalles_facturas";
$proto21["m_srcTableName"] = "detalles_facturas";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "factura_id";
$proto21["m_columns"][] = "empresa_id";
$proto21["m_columns"][] = "creado_por";
$proto21["m_columns"][] = "actualizado_por";
$proto21["m_columns"][] = "creado";
$proto21["m_columns"][] = "actualizado";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "detalles_facturas";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "detalles_facturas";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="detalles_facturas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_detalles_facturas = createSqlQuery_detalles_facturas();


	
		;

							

$tdatadetalles_facturas[".sqlquery"] = $queryData_detalles_facturas;

$tableEvents["detalles_facturas"] = new eventsBase;
$tdatadetalles_facturas[".hasEvents"] = false;

?>