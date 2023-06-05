<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafacturas = array();
	$tdatafacturas[".truncateText"] = true;
	$tdatafacturas[".NumberOfChars"] = 80;
	$tdatafacturas[".ShortName"] = "facturas";
	$tdatafacturas[".OwnerID"] = "empresa_id";
	$tdatafacturas[".OriginalTable"] = "facturas";

//	field labels
$fieldLabelsfacturas = array();
$fieldToolTipsfacturas = array();
$pageTitlesfacturas = array();
$placeHoldersfacturas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsfacturas["Spanish"] = array();
	$fieldToolTipsfacturas["Spanish"] = array();
	$placeHoldersfacturas["Spanish"] = array();
	$pageTitlesfacturas["Spanish"] = array();
	$fieldLabelsfacturas["Spanish"]["id"] = "Id";
	$fieldToolTipsfacturas["Spanish"]["id"] = "";
	$placeHoldersfacturas["Spanish"]["id"] = "";
	$fieldLabelsfacturas["Spanish"]["empresa_id"] = "Empresa";
	$fieldToolTipsfacturas["Spanish"]["empresa_id"] = "";
	$placeHoldersfacturas["Spanish"]["empresa_id"] = "";
	$fieldLabelsfacturas["Spanish"]["creado_por"] = "Creado Por";
	$fieldToolTipsfacturas["Spanish"]["creado_por"] = "";
	$placeHoldersfacturas["Spanish"]["creado_por"] = "";
	$fieldLabelsfacturas["Spanish"]["actualizado_por"] = "Actualizado Por";
	$fieldToolTipsfacturas["Spanish"]["actualizado_por"] = "";
	$placeHoldersfacturas["Spanish"]["actualizado_por"] = "";
	$fieldLabelsfacturas["Spanish"]["creado"] = "Creado";
	$fieldToolTipsfacturas["Spanish"]["creado"] = "";
	$placeHoldersfacturas["Spanish"]["creado"] = "";
	$fieldLabelsfacturas["Spanish"]["actualizado"] = "Actualizado";
	$fieldToolTipsfacturas["Spanish"]["actualizado"] = "";
	$placeHoldersfacturas["Spanish"]["actualizado"] = "";
	if (count($fieldToolTipsfacturas["Spanish"]))
		$tdatafacturas[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfacturas[""] = array();
	$fieldToolTipsfacturas[""] = array();
	$placeHoldersfacturas[""] = array();
	$pageTitlesfacturas[""] = array();
	if (count($fieldToolTipsfacturas[""]))
		$tdatafacturas[".isUseToolTips"] = true;
}


	$tdatafacturas[".NCSearch"] = true;



$tdatafacturas[".shortTableName"] = "facturas";
$tdatafacturas[".nSecOptions"] = 1;
$tdatafacturas[".recsPerRowPrint"] = 1;
$tdatafacturas[".mainTableOwnerID"] = "empresa_id";
$tdatafacturas[".moveNext"] = 1;
$tdatafacturas[".entityType"] = 0;

$tdatafacturas[".strOriginalTableName"] = "facturas";

	



$tdatafacturas[".showAddInPopup"] = false;

$tdatafacturas[".showEditInPopup"] = false;

$tdatafacturas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafacturas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafacturas[".fieldsForRegister"] = array();

$tdatafacturas[".listAjax"] = false;

	$tdatafacturas[".audit"] = false;

	$tdatafacturas[".locking"] = false;

$tdatafacturas[".edit"] = true;
$tdatafacturas[".afterEditAction"] = 1;
$tdatafacturas[".closePopupAfterEdit"] = 1;
$tdatafacturas[".afterEditActionDetTable"] = "";

$tdatafacturas[".add"] = true;
$tdatafacturas[".afterAddAction"] = 1;
$tdatafacturas[".closePopupAfterAdd"] = 1;
$tdatafacturas[".afterAddActionDetTable"] = "";

$tdatafacturas[".list"] = true;



$tdatafacturas[".reorderRecordsByHeader"] = true;


$tdatafacturas[".exportFormatting"] = 2;
$tdatafacturas[".exportDelimiter"] = ",";
		
$tdatafacturas[".view"] = true;

$tdatafacturas[".import"] = true;

$tdatafacturas[".exportTo"] = true;

$tdatafacturas[".printFriendly"] = true;

$tdatafacturas[".delete"] = true;

$tdatafacturas[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafacturas[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatafacturas[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatafacturas[".searchSaving"] = false;
//

$tdatafacturas[".showSearchPanel"] = true;
		$tdatafacturas[".flexibleSearch"] = true;

$tdatafacturas[".isUseAjaxSuggest"] = true;

$tdatafacturas[".rowHighlite"] = true;





$tdatafacturas[".ajaxCodeSnippetAdded"] = false;

$tdatafacturas[".buttonsAdded"] = false;

$tdatafacturas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafacturas[".isUseTimeForSearch"] = false;



$tdatafacturas[".badgeColor"] = "3CB371";


$tdatafacturas[".allSearchFields"] = array();
$tdatafacturas[".filterFields"] = array();
$tdatafacturas[".requiredSearchFields"] = array();

$tdatafacturas[".allSearchFields"][] = "empresa_id";
	

$tdatafacturas[".googleLikeFields"] = array();
$tdatafacturas[".googleLikeFields"][] = "id";
$tdatafacturas[".googleLikeFields"][] = "empresa_id";
$tdatafacturas[".googleLikeFields"][] = "creado_por";
$tdatafacturas[".googleLikeFields"][] = "actualizado_por";
$tdatafacturas[".googleLikeFields"][] = "creado";
$tdatafacturas[".googleLikeFields"][] = "actualizado";


$tdatafacturas[".advSearchFields"] = array();
$tdatafacturas[".advSearchFields"][] = "empresa_id";

$tdatafacturas[".tableType"] = "list";

$tdatafacturas[".printerPageOrientation"] = 0;
$tdatafacturas[".nPrinterPageScale"] = 100;

$tdatafacturas[".nPrinterSplitRecords"] = 40;

$tdatafacturas[".nPrinterPDFSplitRecords"] = 40;



$tdatafacturas[".geocodingEnabled"] = false;





$tdatafacturas[".listGridLayout"] = 3;


$tdatafacturas[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdatafacturas[".pageSize"] = 20;

$tdatafacturas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafacturas[".strOrderBy"] = $tstrOrderBy;

$tdatafacturas[".orderindexes"] = array();

$tdatafacturas[".sqlHead"] = "SELECT id,  	empresa_id,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$tdatafacturas[".sqlFrom"] = "FROM facturas";
$tdatafacturas[".sqlWhereExpr"] = "";
$tdatafacturas[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafacturas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafacturas[".arrGroupsPerPage"] = $arrGPP;

$tdatafacturas[".highlightSearchResults"] = true;

$tableKeysfacturas = array();
$tableKeysfacturas[] = "id";
$tdatafacturas[".Keys"] = $tableKeysfacturas;

$tdatafacturas[".listFields"] = array();
$tdatafacturas[".listFields"][] = "empresa_id";
$tdatafacturas[".listFields"][] = "creado_por";
$tdatafacturas[".listFields"][] = "actualizado_por";
$tdatafacturas[".listFields"][] = "creado";
$tdatafacturas[".listFields"][] = "actualizado";

$tdatafacturas[".hideMobileList"] = array();


$tdatafacturas[".viewFields"] = array();
$tdatafacturas[".viewFields"][] = "empresa_id";

$tdatafacturas[".addFields"] = array();

$tdatafacturas[".masterListFields"] = array();
$tdatafacturas[".masterListFields"][] = "empresa_id";

$tdatafacturas[".inlineAddFields"] = array();

$tdatafacturas[".editFields"] = array();
$tdatafacturas[".editFields"][] = "empresa_id";

$tdatafacturas[".inlineEditFields"] = array();

$tdatafacturas[".updateSelectedFields"] = array();
$tdatafacturas[".updateSelectedFields"][] = "empresa_id";


$tdatafacturas[".exportFields"] = array();
$tdatafacturas[".exportFields"][] = "empresa_id";

$tdatafacturas[".importFields"] = array();
$tdatafacturas[".importFields"][] = "empresa_id";

$tdatafacturas[".printFields"] = array();
$tdatafacturas[".printFields"][] = "empresa_id";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "facturas";
	$fdata["Label"] = GetFieldLabel("facturas","id");
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








	$tdatafacturas["id"] = $fdata;
//	empresa_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "empresa_id";
	$fdata["GoodName"] = "empresa_id";
	$fdata["ownerTable"] = "facturas";
	$fdata["Label"] = GetFieldLabel("facturas","empresa_id");
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




	$tdatafacturas["empresa_id"] = $fdata;
//	creado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "creado_por";
	$fdata["GoodName"] = "creado_por";
	$fdata["ownerTable"] = "facturas";
	$fdata["Label"] = GetFieldLabel("facturas","creado_por");
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








	$tdatafacturas["creado_por"] = $fdata;
//	actualizado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "actualizado_por";
	$fdata["GoodName"] = "actualizado_por";
	$fdata["ownerTable"] = "facturas";
	$fdata["Label"] = GetFieldLabel("facturas","actualizado_por");
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








	$tdatafacturas["actualizado_por"] = $fdata;
//	creado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "creado";
	$fdata["GoodName"] = "creado";
	$fdata["ownerTable"] = "facturas";
	$fdata["Label"] = GetFieldLabel("facturas","creado");
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








	$tdatafacturas["creado"] = $fdata;
//	actualizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "actualizado";
	$fdata["GoodName"] = "actualizado";
	$fdata["ownerTable"] = "facturas";
	$fdata["Label"] = GetFieldLabel("facturas","actualizado");
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








	$tdatafacturas["actualizado"] = $fdata;


$tables_data["facturas"]=&$tdatafacturas;
$field_labels["facturas"] = &$fieldLabelsfacturas;
$fieldToolTips["facturas"] = &$fieldToolTipsfacturas;
$placeHolders["facturas"] = &$placeHoldersfacturas;
$page_titles["facturas"] = &$pageTitlesfacturas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["facturas"] = array();
//	detalles_facturas
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="detalles_facturas";
		$detailsParam["dOriginalTable"] = "detalles_facturas";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "detalles_facturas";
	$detailsParam["dCaptionTable"] = GetTableCaption("detalles_facturas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["facturas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["facturas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["facturas"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["facturas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["facturas"][$dIndex]["detailKeys"][]="factura_id";

// tables which are master tables for current table (detail)
$masterTablesData["facturas"] = array();


	
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
					$masterTablesData["facturas"][0] = $masterParams;
				$masterTablesData["facturas"][0]["masterKeys"] = array();
	$masterTablesData["facturas"][0]["masterKeys"][]="id";
				$masterTablesData["facturas"][0]["detailKeys"] = array();
	$masterTablesData["facturas"][0]["detailKeys"][]="empresa_id";
		
	
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
					$masterTablesData["facturas"][1] = $masterParams;
				$masterTablesData["facturas"][1]["masterKeys"] = array();
	$masterTablesData["facturas"][1]["masterKeys"][]="id";
				$masterTablesData["facturas"][1]["detailKeys"] = array();
	$masterTablesData["facturas"][1]["detailKeys"][]="actualizado_por";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_facturas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	empresa_id,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$proto0["m_strFrom"] = "FROM facturas";
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
	"m_strTable" => "facturas",
	"m_srcTableName" => "facturas"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "facturas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "empresa_id",
	"m_strTable" => "facturas",
	"m_srcTableName" => "facturas"
));

$proto8["m_sql"] = "empresa_id";
$proto8["m_srcTableName"] = "facturas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "creado_por",
	"m_strTable" => "facturas",
	"m_srcTableName" => "facturas"
));

$proto10["m_sql"] = "creado_por";
$proto10["m_srcTableName"] = "facturas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado_por",
	"m_strTable" => "facturas",
	"m_srcTableName" => "facturas"
));

$proto12["m_sql"] = "actualizado_por";
$proto12["m_srcTableName"] = "facturas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "creado",
	"m_strTable" => "facturas",
	"m_srcTableName" => "facturas"
));

$proto14["m_sql"] = "creado";
$proto14["m_srcTableName"] = "facturas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado",
	"m_strTable" => "facturas",
	"m_srcTableName" => "facturas"
));

$proto16["m_sql"] = "actualizado";
$proto16["m_srcTableName"] = "facturas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "facturas";
$proto19["m_srcTableName"] = "facturas";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "empresa_id";
$proto19["m_columns"][] = "creado_por";
$proto19["m_columns"][] = "actualizado_por";
$proto19["m_columns"][] = "creado";
$proto19["m_columns"][] = "actualizado";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "facturas";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "facturas";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="facturas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_facturas = createSqlQuery_facturas();


	
		;

						

$tdatafacturas[".sqlquery"] = $queryData_facturas;

$tableEvents["facturas"] = new eventsBase;
$tdatafacturas[".hasEvents"] = false;

?>