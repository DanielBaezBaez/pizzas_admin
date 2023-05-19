<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapaises = array();
	$tdatapaises[".truncateText"] = true;
	$tdatapaises[".NumberOfChars"] = 80;
	$tdatapaises[".ShortName"] = "paises";
	$tdatapaises[".OwnerID"] = "";
	$tdatapaises[".OriginalTable"] = "paises";

//	field labels
$fieldLabelspaises = array();
$fieldToolTipspaises = array();
$pageTitlespaises = array();
$placeHolderspaises = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspaises["Spanish"] = array();
	$fieldToolTipspaises["Spanish"] = array();
	$placeHolderspaises["Spanish"] = array();
	$pageTitlespaises["Spanish"] = array();
	$fieldLabelspaises["Spanish"]["id"] = "Id";
	$fieldToolTipspaises["Spanish"]["id"] = "";
	$placeHolderspaises["Spanish"]["id"] = "";
	$fieldLabelspaises["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipspaises["Spanish"]["descripcion"] = "";
	$placeHolderspaises["Spanish"]["descripcion"] = "";
	$fieldLabelspaises["Spanish"]["empresa_id"] = "Empresa Id";
	$fieldToolTipspaises["Spanish"]["empresa_id"] = "";
	$placeHolderspaises["Spanish"]["empresa_id"] = "";
	$fieldLabelspaises["Spanish"]["creado_por"] = "Creado Por";
	$fieldToolTipspaises["Spanish"]["creado_por"] = "";
	$placeHolderspaises["Spanish"]["creado_por"] = "";
	$fieldLabelspaises["Spanish"]["actualizado_por"] = "Actualizado Por";
	$fieldToolTipspaises["Spanish"]["actualizado_por"] = "";
	$placeHolderspaises["Spanish"]["actualizado_por"] = "";
	$fieldLabelspaises["Spanish"]["creado"] = "Creado";
	$fieldToolTipspaises["Spanish"]["creado"] = "";
	$placeHolderspaises["Spanish"]["creado"] = "";
	$fieldLabelspaises["Spanish"]["actualizado"] = "Actualizado";
	$fieldToolTipspaises["Spanish"]["actualizado"] = "";
	$placeHolderspaises["Spanish"]["actualizado"] = "";
	if (count($fieldToolTipspaises["Spanish"]))
		$tdatapaises[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspaises[""] = array();
	$fieldToolTipspaises[""] = array();
	$placeHolderspaises[""] = array();
	$pageTitlespaises[""] = array();
	if (count($fieldToolTipspaises[""]))
		$tdatapaises[".isUseToolTips"] = true;
}


	$tdatapaises[".NCSearch"] = true;



$tdatapaises[".shortTableName"] = "paises";
$tdatapaises[".nSecOptions"] = 0;
$tdatapaises[".recsPerRowPrint"] = 1;
$tdatapaises[".mainTableOwnerID"] = "";
$tdatapaises[".moveNext"] = 1;
$tdatapaises[".entityType"] = 0;

$tdatapaises[".strOriginalTableName"] = "paises";

	



$tdatapaises[".showAddInPopup"] = false;

$tdatapaises[".showEditInPopup"] = false;

$tdatapaises[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapaises[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapaises[".fieldsForRegister"] = array();

$tdatapaises[".listAjax"] = false;

	$tdatapaises[".audit"] = false;

	$tdatapaises[".locking"] = false;

$tdatapaises[".edit"] = true;
$tdatapaises[".afterEditAction"] = 1;
$tdatapaises[".closePopupAfterEdit"] = 1;
$tdatapaises[".afterEditActionDetTable"] = "";

$tdatapaises[".add"] = true;
$tdatapaises[".afterAddAction"] = 1;
$tdatapaises[".closePopupAfterAdd"] = 1;
$tdatapaises[".afterAddActionDetTable"] = "";

$tdatapaises[".list"] = true;



$tdatapaises[".reorderRecordsByHeader"] = true;


$tdatapaises[".exportFormatting"] = 2;
$tdatapaises[".exportDelimiter"] = ",";
		
$tdatapaises[".view"] = true;

$tdatapaises[".import"] = true;

$tdatapaises[".exportTo"] = true;

$tdatapaises[".printFriendly"] = true;

$tdatapaises[".delete"] = true;

$tdatapaises[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapaises[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatapaises[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatapaises[".searchSaving"] = false;
//

$tdatapaises[".showSearchPanel"] = true;
		$tdatapaises[".flexibleSearch"] = true;

$tdatapaises[".isUseAjaxSuggest"] = true;

$tdatapaises[".rowHighlite"] = true;





$tdatapaises[".ajaxCodeSnippetAdded"] = false;

$tdatapaises[".buttonsAdded"] = false;

$tdatapaises[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapaises[".isUseTimeForSearch"] = false;



$tdatapaises[".badgeColor"] = "DAA520";


$tdatapaises[".allSearchFields"] = array();
$tdatapaises[".filterFields"] = array();
$tdatapaises[".requiredSearchFields"] = array();

$tdatapaises[".allSearchFields"][] = "descripcion";
	

$tdatapaises[".googleLikeFields"] = array();
$tdatapaises[".googleLikeFields"][] = "id";
$tdatapaises[".googleLikeFields"][] = "descripcion";
$tdatapaises[".googleLikeFields"][] = "empresa_id";
$tdatapaises[".googleLikeFields"][] = "creado_por";
$tdatapaises[".googleLikeFields"][] = "actualizado_por";
$tdatapaises[".googleLikeFields"][] = "creado";
$tdatapaises[".googleLikeFields"][] = "actualizado";


$tdatapaises[".advSearchFields"] = array();
$tdatapaises[".advSearchFields"][] = "descripcion";

$tdatapaises[".tableType"] = "list";

$tdatapaises[".printerPageOrientation"] = 0;
$tdatapaises[".nPrinterPageScale"] = 100;

$tdatapaises[".nPrinterSplitRecords"] = 40;

$tdatapaises[".nPrinterPDFSplitRecords"] = 40;



$tdatapaises[".geocodingEnabled"] = false;





$tdatapaises[".listGridLayout"] = 3;


$tdatapaises[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdatapaises[".pageSize"] = 20;

$tdatapaises[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapaises[".strOrderBy"] = $tstrOrderBy;

$tdatapaises[".orderindexes"] = array();

$tdatapaises[".sqlHead"] = "SELECT id,  	descripcion,  	empresa_id,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$tdatapaises[".sqlFrom"] = "FROM paises";
$tdatapaises[".sqlWhereExpr"] = "";
$tdatapaises[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapaises[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapaises[".arrGroupsPerPage"] = $arrGPP;

$tdatapaises[".highlightSearchResults"] = true;

$tableKeyspaises = array();
$tableKeyspaises[] = "id";
$tdatapaises[".Keys"] = $tableKeyspaises;

$tdatapaises[".listFields"] = array();
$tdatapaises[".listFields"][] = "descripcion";
$tdatapaises[".listFields"][] = "empresa_id";
$tdatapaises[".listFields"][] = "creado_por";
$tdatapaises[".listFields"][] = "actualizado_por";
$tdatapaises[".listFields"][] = "creado";
$tdatapaises[".listFields"][] = "actualizado";

$tdatapaises[".hideMobileList"] = array();


$tdatapaises[".viewFields"] = array();
$tdatapaises[".viewFields"][] = "descripcion";

$tdatapaises[".addFields"] = array();
$tdatapaises[".addFields"][] = "descripcion";

$tdatapaises[".masterListFields"] = array();
$tdatapaises[".masterListFields"][] = "id";
$tdatapaises[".masterListFields"][] = "descripcion";
$tdatapaises[".masterListFields"][] = "empresa_id";
$tdatapaises[".masterListFields"][] = "creado_por";
$tdatapaises[".masterListFields"][] = "actualizado_por";
$tdatapaises[".masterListFields"][] = "creado";
$tdatapaises[".masterListFields"][] = "actualizado";

$tdatapaises[".inlineAddFields"] = array();

$tdatapaises[".editFields"] = array();
$tdatapaises[".editFields"][] = "descripcion";

$tdatapaises[".inlineEditFields"] = array();

$tdatapaises[".updateSelectedFields"] = array();
$tdatapaises[".updateSelectedFields"][] = "descripcion";


$tdatapaises[".exportFields"] = array();
$tdatapaises[".exportFields"][] = "descripcion";

$tdatapaises[".importFields"] = array();
$tdatapaises[".importFields"][] = "descripcion";

$tdatapaises[".printFields"] = array();
$tdatapaises[".printFields"][] = "descripcion";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "paises";
	$fdata["Label"] = GetFieldLabel("paises","id");
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








	$tdatapaises["id"] = $fdata;
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "paises";
	$fdata["Label"] = GetFieldLabel("paises","descripcion");
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




	$tdatapaises["descripcion"] = $fdata;
//	empresa_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "empresa_id";
	$fdata["GoodName"] = "empresa_id";
	$fdata["ownerTable"] = "paises";
	$fdata["Label"] = GetFieldLabel("paises","empresa_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
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








	$tdatapaises["empresa_id"] = $fdata;
//	creado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "creado_por";
	$fdata["GoodName"] = "creado_por";
	$fdata["ownerTable"] = "paises";
	$fdata["Label"] = GetFieldLabel("paises","creado_por");
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








	$tdatapaises["creado_por"] = $fdata;
//	actualizado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "actualizado_por";
	$fdata["GoodName"] = "actualizado_por";
	$fdata["ownerTable"] = "paises";
	$fdata["Label"] = GetFieldLabel("paises","actualizado_por");
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








	$tdatapaises["actualizado_por"] = $fdata;
//	creado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "creado";
	$fdata["GoodName"] = "creado";
	$fdata["ownerTable"] = "paises";
	$fdata["Label"] = GetFieldLabel("paises","creado");
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








	$tdatapaises["creado"] = $fdata;
//	actualizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "actualizado";
	$fdata["GoodName"] = "actualizado";
	$fdata["ownerTable"] = "paises";
	$fdata["Label"] = GetFieldLabel("paises","actualizado");
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








	$tdatapaises["actualizado"] = $fdata;


$tables_data["paises"]=&$tdatapaises;
$field_labels["paises"] = &$fieldLabelspaises;
$fieldToolTips["paises"] = &$fieldToolTipspaises;
$placeHolders["paises"] = &$placeHolderspaises;
$page_titles["paises"] = &$pageTitlespaises;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["paises"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["paises"] = array();


	
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
					$masterTablesData["paises"][0] = $masterParams;
				$masterTablesData["paises"][0]["masterKeys"] = array();
	$masterTablesData["paises"][0]["masterKeys"][]="id";
				$masterTablesData["paises"][0]["detailKeys"] = array();
	$masterTablesData["paises"][0]["detailKeys"][]="empresa_id";
		
	
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
					$masterTablesData["paises"][1] = $masterParams;
				$masterTablesData["paises"][1]["masterKeys"] = array();
	$masterTablesData["paises"][1]["masterKeys"][]="id";
				$masterTablesData["paises"][1]["detailKeys"] = array();
	$masterTablesData["paises"][1]["detailKeys"][]="actualizado_por";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_paises()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	descripcion,  	empresa_id,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$proto0["m_strFrom"] = "FROM paises";
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
	"m_strTable" => "paises",
	"m_srcTableName" => "paises"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "paises";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "paises",
	"m_srcTableName" => "paises"
));

$proto8["m_sql"] = "descripcion";
$proto8["m_srcTableName"] = "paises";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "empresa_id",
	"m_strTable" => "paises",
	"m_srcTableName" => "paises"
));

$proto10["m_sql"] = "empresa_id";
$proto10["m_srcTableName"] = "paises";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "creado_por",
	"m_strTable" => "paises",
	"m_srcTableName" => "paises"
));

$proto12["m_sql"] = "creado_por";
$proto12["m_srcTableName"] = "paises";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado_por",
	"m_strTable" => "paises",
	"m_srcTableName" => "paises"
));

$proto14["m_sql"] = "actualizado_por";
$proto14["m_srcTableName"] = "paises";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "creado",
	"m_strTable" => "paises",
	"m_srcTableName" => "paises"
));

$proto16["m_sql"] = "creado";
$proto16["m_srcTableName"] = "paises";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado",
	"m_strTable" => "paises",
	"m_srcTableName" => "paises"
));

$proto18["m_sql"] = "actualizado";
$proto18["m_srcTableName"] = "paises";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "paises";
$proto21["m_srcTableName"] = "paises";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "descripcion";
$proto21["m_columns"][] = "empresa_id";
$proto21["m_columns"][] = "creado_por";
$proto21["m_columns"][] = "actualizado_por";
$proto21["m_columns"][] = "creado";
$proto21["m_columns"][] = "actualizado";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "paises";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "paises";
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
$proto0["m_srcTableName"]="paises";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_paises = createSqlQuery_paises();


	
		;

							

$tdatapaises[".sqlquery"] = $queryData_paises;

$tableEvents["paises"] = new eventsBase;
$tdatapaises[".hasEvents"] = false;

?>