<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapersonales = array();
	$tdatapersonales[".truncateText"] = true;
	$tdatapersonales[".NumberOfChars"] = 80;
	$tdatapersonales[".ShortName"] = "personales";
	$tdatapersonales[".OwnerID"] = "empresa_id";
	$tdatapersonales[".OriginalTable"] = "personales";

//	field labels
$fieldLabelspersonales = array();
$fieldToolTipspersonales = array();
$pageTitlespersonales = array();
$placeHolderspersonales = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspersonales["Spanish"] = array();
	$fieldToolTipspersonales["Spanish"] = array();
	$placeHolderspersonales["Spanish"] = array();
	$pageTitlespersonales["Spanish"] = array();
	$fieldLabelspersonales["Spanish"]["id"] = "Id";
	$fieldToolTipspersonales["Spanish"]["id"] = "";
	$placeHolderspersonales["Spanish"]["id"] = "";
	$fieldLabelspersonales["Spanish"]["persona_id"] = "Persona ";
	$fieldToolTipspersonales["Spanish"]["persona_id"] = "";
	$placeHolderspersonales["Spanish"]["persona_id"] = "";
	$fieldLabelspersonales["Spanish"]["empresa_id"] = "Empresa";
	$fieldToolTipspersonales["Spanish"]["empresa_id"] = "";
	$placeHolderspersonales["Spanish"]["empresa_id"] = "";
	$fieldLabelspersonales["Spanish"]["creado_por"] = "Creado Por";
	$fieldToolTipspersonales["Spanish"]["creado_por"] = "";
	$placeHolderspersonales["Spanish"]["creado_por"] = "";
	$fieldLabelspersonales["Spanish"]["actualizado_por"] = "Actualizado Por";
	$fieldToolTipspersonales["Spanish"]["actualizado_por"] = "";
	$placeHolderspersonales["Spanish"]["actualizado_por"] = "";
	$fieldLabelspersonales["Spanish"]["creado"] = "Creado";
	$fieldToolTipspersonales["Spanish"]["creado"] = "";
	$placeHolderspersonales["Spanish"]["creado"] = "";
	$fieldLabelspersonales["Spanish"]["actualizado"] = "Actualizado";
	$fieldToolTipspersonales["Spanish"]["actualizado"] = "";
	$placeHolderspersonales["Spanish"]["actualizado"] = "";
	if (count($fieldToolTipspersonales["Spanish"]))
		$tdatapersonales[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspersonales[""] = array();
	$fieldToolTipspersonales[""] = array();
	$placeHolderspersonales[""] = array();
	$pageTitlespersonales[""] = array();
	if (count($fieldToolTipspersonales[""]))
		$tdatapersonales[".isUseToolTips"] = true;
}


	$tdatapersonales[".NCSearch"] = true;



$tdatapersonales[".shortTableName"] = "personales";
$tdatapersonales[".nSecOptions"] = 1;
$tdatapersonales[".recsPerRowPrint"] = 1;
$tdatapersonales[".mainTableOwnerID"] = "empresa_id";
$tdatapersonales[".moveNext"] = 1;
$tdatapersonales[".entityType"] = 0;

$tdatapersonales[".strOriginalTableName"] = "personales";

	



$tdatapersonales[".showAddInPopup"] = false;

$tdatapersonales[".showEditInPopup"] = false;

$tdatapersonales[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapersonales[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapersonales[".fieldsForRegister"] = array();

$tdatapersonales[".listAjax"] = false;

	$tdatapersonales[".audit"] = false;

	$tdatapersonales[".locking"] = false;

$tdatapersonales[".edit"] = true;
$tdatapersonales[".afterEditAction"] = 1;
$tdatapersonales[".closePopupAfterEdit"] = 1;
$tdatapersonales[".afterEditActionDetTable"] = "";

$tdatapersonales[".add"] = true;
$tdatapersonales[".afterAddAction"] = 1;
$tdatapersonales[".closePopupAfterAdd"] = 1;
$tdatapersonales[".afterAddActionDetTable"] = "";

$tdatapersonales[".list"] = true;



$tdatapersonales[".reorderRecordsByHeader"] = true;


$tdatapersonales[".exportFormatting"] = 2;
$tdatapersonales[".exportDelimiter"] = ",";
		
$tdatapersonales[".view"] = true;

$tdatapersonales[".import"] = true;

$tdatapersonales[".exportTo"] = true;

$tdatapersonales[".printFriendly"] = true;

$tdatapersonales[".delete"] = true;

$tdatapersonales[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapersonales[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatapersonales[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatapersonales[".searchSaving"] = false;
//

$tdatapersonales[".showSearchPanel"] = true;
		$tdatapersonales[".flexibleSearch"] = true;

$tdatapersonales[".isUseAjaxSuggest"] = true;

$tdatapersonales[".rowHighlite"] = true;





$tdatapersonales[".ajaxCodeSnippetAdded"] = false;

$tdatapersonales[".buttonsAdded"] = false;

$tdatapersonales[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapersonales[".isUseTimeForSearch"] = false;



$tdatapersonales[".badgeColor"] = "6493EA";


$tdatapersonales[".allSearchFields"] = array();
$tdatapersonales[".filterFields"] = array();
$tdatapersonales[".requiredSearchFields"] = array();

$tdatapersonales[".allSearchFields"][] = "persona_id";
	$tdatapersonales[".allSearchFields"][] = "empresa_id";
	

$tdatapersonales[".googleLikeFields"] = array();
$tdatapersonales[".googleLikeFields"][] = "id";
$tdatapersonales[".googleLikeFields"][] = "persona_id";
$tdatapersonales[".googleLikeFields"][] = "empresa_id";
$tdatapersonales[".googleLikeFields"][] = "creado_por";
$tdatapersonales[".googleLikeFields"][] = "actualizado_por";
$tdatapersonales[".googleLikeFields"][] = "creado";
$tdatapersonales[".googleLikeFields"][] = "actualizado";


$tdatapersonales[".advSearchFields"] = array();
$tdatapersonales[".advSearchFields"][] = "persona_id";
$tdatapersonales[".advSearchFields"][] = "empresa_id";

$tdatapersonales[".tableType"] = "list";

$tdatapersonales[".printerPageOrientation"] = 0;
$tdatapersonales[".nPrinterPageScale"] = 100;

$tdatapersonales[".nPrinterSplitRecords"] = 40;

$tdatapersonales[".nPrinterPDFSplitRecords"] = 40;



$tdatapersonales[".geocodingEnabled"] = false;





$tdatapersonales[".listGridLayout"] = 3;


$tdatapersonales[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdatapersonales[".pageSize"] = 20;

$tdatapersonales[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapersonales[".strOrderBy"] = $tstrOrderBy;

$tdatapersonales[".orderindexes"] = array();

$tdatapersonales[".sqlHead"] = "SELECT id,  	persona_id,  	empresa_id,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$tdatapersonales[".sqlFrom"] = "FROM personales";
$tdatapersonales[".sqlWhereExpr"] = "";
$tdatapersonales[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapersonales[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapersonales[".arrGroupsPerPage"] = $arrGPP;

$tdatapersonales[".highlightSearchResults"] = true;

$tableKeyspersonales = array();
$tableKeyspersonales[] = "id";
$tdatapersonales[".Keys"] = $tableKeyspersonales;

$tdatapersonales[".listFields"] = array();
$tdatapersonales[".listFields"][] = "persona_id";
$tdatapersonales[".listFields"][] = "empresa_id";
$tdatapersonales[".listFields"][] = "creado_por";
$tdatapersonales[".listFields"][] = "actualizado_por";
$tdatapersonales[".listFields"][] = "creado";
$tdatapersonales[".listFields"][] = "actualizado";

$tdatapersonales[".hideMobileList"] = array();


$tdatapersonales[".viewFields"] = array();
$tdatapersonales[".viewFields"][] = "persona_id";
$tdatapersonales[".viewFields"][] = "empresa_id";

$tdatapersonales[".addFields"] = array();
$tdatapersonales[".addFields"][] = "persona_id";

$tdatapersonales[".masterListFields"] = array();
$tdatapersonales[".masterListFields"][] = "id";
$tdatapersonales[".masterListFields"][] = "persona_id";
$tdatapersonales[".masterListFields"][] = "empresa_id";
$tdatapersonales[".masterListFields"][] = "creado_por";
$tdatapersonales[".masterListFields"][] = "actualizado_por";
$tdatapersonales[".masterListFields"][] = "creado";
$tdatapersonales[".masterListFields"][] = "actualizado";

$tdatapersonales[".inlineAddFields"] = array();

$tdatapersonales[".editFields"] = array();
$tdatapersonales[".editFields"][] = "persona_id";
$tdatapersonales[".editFields"][] = "empresa_id";

$tdatapersonales[".inlineEditFields"] = array();

$tdatapersonales[".updateSelectedFields"] = array();
$tdatapersonales[".updateSelectedFields"][] = "persona_id";
$tdatapersonales[".updateSelectedFields"][] = "empresa_id";


$tdatapersonales[".exportFields"] = array();
$tdatapersonales[".exportFields"][] = "persona_id";
$tdatapersonales[".exportFields"][] = "empresa_id";

$tdatapersonales[".importFields"] = array();
$tdatapersonales[".importFields"][] = "persona_id";
$tdatapersonales[".importFields"][] = "empresa_id";

$tdatapersonales[".printFields"] = array();
$tdatapersonales[".printFields"][] = "persona_id";
$tdatapersonales[".printFields"][] = "empresa_id";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "personales";
	$fdata["Label"] = GetFieldLabel("personales","id");
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








	$tdatapersonales["id"] = $fdata;
//	persona_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "persona_id";
	$fdata["GoodName"] = "persona_id";
	$fdata["ownerTable"] = "personales";
	$fdata["Label"] = GetFieldLabel("personales","persona_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "persona_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "persona_id";

	
	
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
	$edata["LookupTable"] = "personas";
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




	$tdatapersonales["persona_id"] = $fdata;
//	empresa_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "empresa_id";
	$fdata["GoodName"] = "empresa_id";
	$fdata["ownerTable"] = "personales";
	$fdata["Label"] = GetFieldLabel("personales","empresa_id");
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




	$tdatapersonales["empresa_id"] = $fdata;
//	creado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "creado_por";
	$fdata["GoodName"] = "creado_por";
	$fdata["ownerTable"] = "personales";
	$fdata["Label"] = GetFieldLabel("personales","creado_por");
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








	$tdatapersonales["creado_por"] = $fdata;
//	actualizado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "actualizado_por";
	$fdata["GoodName"] = "actualizado_por";
	$fdata["ownerTable"] = "personales";
	$fdata["Label"] = GetFieldLabel("personales","actualizado_por");
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








	$tdatapersonales["actualizado_por"] = $fdata;
//	creado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "creado";
	$fdata["GoodName"] = "creado";
	$fdata["ownerTable"] = "personales";
	$fdata["Label"] = GetFieldLabel("personales","creado");
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








	$tdatapersonales["creado"] = $fdata;
//	actualizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "actualizado";
	$fdata["GoodName"] = "actualizado";
	$fdata["ownerTable"] = "personales";
	$fdata["Label"] = GetFieldLabel("personales","actualizado");
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








	$tdatapersonales["actualizado"] = $fdata;


$tables_data["personales"]=&$tdatapersonales;
$field_labels["personales"] = &$fieldLabelspersonales;
$fieldToolTips["personales"] = &$fieldToolTipspersonales;
$placeHolders["personales"] = &$placeHolderspersonales;
$page_titles["personales"] = &$pageTitlespersonales;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["personales"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["personales"] = array();


	
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
					$masterTablesData["personales"][0] = $masterParams;
				$masterTablesData["personales"][0]["masterKeys"] = array();
	$masterTablesData["personales"][0]["masterKeys"][]="id";
				$masterTablesData["personales"][0]["detailKeys"] = array();
	$masterTablesData["personales"][0]["detailKeys"][]="empresa_id";
		
	
				$strOriginalDetailsTable="personas";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="personas";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "personas";
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
					$masterTablesData["personales"][1] = $masterParams;
				$masterTablesData["personales"][1]["masterKeys"] = array();
	$masterTablesData["personales"][1]["masterKeys"][]="id";
				$masterTablesData["personales"][1]["detailKeys"] = array();
	$masterTablesData["personales"][1]["detailKeys"][]="persona_id";
		
	
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
					$masterTablesData["personales"][2] = $masterParams;
				$masterTablesData["personales"][2]["masterKeys"] = array();
	$masterTablesData["personales"][2]["masterKeys"][]="id";
				$masterTablesData["personales"][2]["detailKeys"] = array();
	$masterTablesData["personales"][2]["detailKeys"][]="actualizado_por";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_personales()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	persona_id,  	empresa_id,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$proto0["m_strFrom"] = "FROM personales";
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
	"m_strTable" => "personales",
	"m_srcTableName" => "personales"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "personales";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "persona_id",
	"m_strTable" => "personales",
	"m_srcTableName" => "personales"
));

$proto8["m_sql"] = "persona_id";
$proto8["m_srcTableName"] = "personales";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "empresa_id",
	"m_strTable" => "personales",
	"m_srcTableName" => "personales"
));

$proto10["m_sql"] = "empresa_id";
$proto10["m_srcTableName"] = "personales";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "creado_por",
	"m_strTable" => "personales",
	"m_srcTableName" => "personales"
));

$proto12["m_sql"] = "creado_por";
$proto12["m_srcTableName"] = "personales";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado_por",
	"m_strTable" => "personales",
	"m_srcTableName" => "personales"
));

$proto14["m_sql"] = "actualizado_por";
$proto14["m_srcTableName"] = "personales";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "creado",
	"m_strTable" => "personales",
	"m_srcTableName" => "personales"
));

$proto16["m_sql"] = "creado";
$proto16["m_srcTableName"] = "personales";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado",
	"m_strTable" => "personales",
	"m_srcTableName" => "personales"
));

$proto18["m_sql"] = "actualizado";
$proto18["m_srcTableName"] = "personales";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "personales";
$proto21["m_srcTableName"] = "personales";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "persona_id";
$proto21["m_columns"][] = "empresa_id";
$proto21["m_columns"][] = "creado_por";
$proto21["m_columns"][] = "actualizado_por";
$proto21["m_columns"][] = "creado";
$proto21["m_columns"][] = "actualizado";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "personales";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "personales";
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
$proto0["m_srcTableName"]="personales";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_personales = createSqlQuery_personales();


	
		;

							

$tdatapersonales[".sqlquery"] = $queryData_personales;

$tableEvents["personales"] = new eventsBase;
$tdatapersonales[".hasEvents"] = false;

?>