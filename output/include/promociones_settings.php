<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapromociones = array();
	$tdatapromociones[".truncateText"] = true;
	$tdatapromociones[".NumberOfChars"] = 80;
	$tdatapromociones[".ShortName"] = "promociones";
	$tdatapromociones[".OwnerID"] = "empresa_id";
	$tdatapromociones[".OriginalTable"] = "promociones";

//	field labels
$fieldLabelspromociones = array();
$fieldToolTipspromociones = array();
$pageTitlespromociones = array();
$placeHolderspromociones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspromociones["Spanish"] = array();
	$fieldToolTipspromociones["Spanish"] = array();
	$placeHolderspromociones["Spanish"] = array();
	$pageTitlespromociones["Spanish"] = array();
	$fieldLabelspromociones["Spanish"]["id"] = "Id";
	$fieldToolTipspromociones["Spanish"]["id"] = "";
	$placeHolderspromociones["Spanish"]["id"] = "";
	$fieldLabelspromociones["Spanish"]["empresa_id"] = "Empresa Id";
	$fieldToolTipspromociones["Spanish"]["empresa_id"] = "";
	$placeHolderspromociones["Spanish"]["empresa_id"] = "";
	$fieldLabelspromociones["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipspromociones["Spanish"]["descripcion"] = "";
	$placeHolderspromociones["Spanish"]["descripcion"] = "";
	$fieldLabelspromociones["Spanish"]["creado_por"] = "Creado Por";
	$fieldToolTipspromociones["Spanish"]["creado_por"] = "";
	$placeHolderspromociones["Spanish"]["creado_por"] = "";
	$fieldLabelspromociones["Spanish"]["actualizado_por"] = "Actualizado Por";
	$fieldToolTipspromociones["Spanish"]["actualizado_por"] = "";
	$placeHolderspromociones["Spanish"]["actualizado_por"] = "";
	$fieldLabelspromociones["Spanish"]["creado"] = "Creado";
	$fieldToolTipspromociones["Spanish"]["creado"] = "";
	$placeHolderspromociones["Spanish"]["creado"] = "";
	$fieldLabelspromociones["Spanish"]["actualizado"] = "Actualizado";
	$fieldToolTipspromociones["Spanish"]["actualizado"] = "";
	$placeHolderspromociones["Spanish"]["actualizado"] = "";
	if (count($fieldToolTipspromociones["Spanish"]))
		$tdatapromociones[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspromociones[""] = array();
	$fieldToolTipspromociones[""] = array();
	$placeHolderspromociones[""] = array();
	$pageTitlespromociones[""] = array();
	if (count($fieldToolTipspromociones[""]))
		$tdatapromociones[".isUseToolTips"] = true;
}


	$tdatapromociones[".NCSearch"] = true;



$tdatapromociones[".shortTableName"] = "promociones";
$tdatapromociones[".nSecOptions"] = 1;
$tdatapromociones[".recsPerRowPrint"] = 1;
$tdatapromociones[".mainTableOwnerID"] = "empresa_id";
$tdatapromociones[".moveNext"] = 1;
$tdatapromociones[".entityType"] = 0;

$tdatapromociones[".strOriginalTableName"] = "promociones";

	



$tdatapromociones[".showAddInPopup"] = false;

$tdatapromociones[".showEditInPopup"] = false;

$tdatapromociones[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapromociones[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapromociones[".fieldsForRegister"] = array();

$tdatapromociones[".listAjax"] = false;

	$tdatapromociones[".audit"] = false;

	$tdatapromociones[".locking"] = false;

$tdatapromociones[".edit"] = true;
$tdatapromociones[".afterEditAction"] = 1;
$tdatapromociones[".closePopupAfterEdit"] = 1;
$tdatapromociones[".afterEditActionDetTable"] = "";

$tdatapromociones[".add"] = true;
$tdatapromociones[".afterAddAction"] = 1;
$tdatapromociones[".closePopupAfterAdd"] = 1;
$tdatapromociones[".afterAddActionDetTable"] = "";

$tdatapromociones[".list"] = true;



$tdatapromociones[".reorderRecordsByHeader"] = true;


$tdatapromociones[".exportFormatting"] = 2;
$tdatapromociones[".exportDelimiter"] = ",";
		
$tdatapromociones[".view"] = true;

$tdatapromociones[".import"] = true;

$tdatapromociones[".exportTo"] = true;

$tdatapromociones[".printFriendly"] = true;

$tdatapromociones[".delete"] = true;

$tdatapromociones[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapromociones[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatapromociones[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatapromociones[".searchSaving"] = false;
//

$tdatapromociones[".showSearchPanel"] = true;
		$tdatapromociones[".flexibleSearch"] = true;

$tdatapromociones[".isUseAjaxSuggest"] = true;

$tdatapromociones[".rowHighlite"] = true;





$tdatapromociones[".ajaxCodeSnippetAdded"] = false;

$tdatapromociones[".buttonsAdded"] = false;

$tdatapromociones[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapromociones[".isUseTimeForSearch"] = false;



$tdatapromociones[".badgeColor"] = "E67349";


$tdatapromociones[".allSearchFields"] = array();
$tdatapromociones[".filterFields"] = array();
$tdatapromociones[".requiredSearchFields"] = array();

$tdatapromociones[".allSearchFields"][] = "empresa_id";
	$tdatapromociones[".allSearchFields"][] = "descripcion";
	

$tdatapromociones[".googleLikeFields"] = array();
$tdatapromociones[".googleLikeFields"][] = "id";
$tdatapromociones[".googleLikeFields"][] = "empresa_id";
$tdatapromociones[".googleLikeFields"][] = "descripcion";
$tdatapromociones[".googleLikeFields"][] = "creado_por";
$tdatapromociones[".googleLikeFields"][] = "actualizado_por";
$tdatapromociones[".googleLikeFields"][] = "creado";
$tdatapromociones[".googleLikeFields"][] = "actualizado";


$tdatapromociones[".advSearchFields"] = array();
$tdatapromociones[".advSearchFields"][] = "empresa_id";
$tdatapromociones[".advSearchFields"][] = "descripcion";

$tdatapromociones[".tableType"] = "list";

$tdatapromociones[".printerPageOrientation"] = 0;
$tdatapromociones[".nPrinterPageScale"] = 100;

$tdatapromociones[".nPrinterSplitRecords"] = 40;

$tdatapromociones[".nPrinterPDFSplitRecords"] = 40;



$tdatapromociones[".geocodingEnabled"] = false;





$tdatapromociones[".listGridLayout"] = 3;


$tdatapromociones[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdatapromociones[".pageSize"] = 20;

$tdatapromociones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapromociones[".strOrderBy"] = $tstrOrderBy;

$tdatapromociones[".orderindexes"] = array();

$tdatapromociones[".sqlHead"] = "SELECT id,  	empresa_id,  	descripcion,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$tdatapromociones[".sqlFrom"] = "FROM promociones";
$tdatapromociones[".sqlWhereExpr"] = "";
$tdatapromociones[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapromociones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapromociones[".arrGroupsPerPage"] = $arrGPP;

$tdatapromociones[".highlightSearchResults"] = true;

$tableKeyspromociones = array();
$tableKeyspromociones[] = "id";
$tdatapromociones[".Keys"] = $tableKeyspromociones;

$tdatapromociones[".listFields"] = array();
$tdatapromociones[".listFields"][] = "empresa_id";
$tdatapromociones[".listFields"][] = "descripcion";
$tdatapromociones[".listFields"][] = "creado_por";
$tdatapromociones[".listFields"][] = "actualizado_por";
$tdatapromociones[".listFields"][] = "creado";
$tdatapromociones[".listFields"][] = "actualizado";

$tdatapromociones[".hideMobileList"] = array();


$tdatapromociones[".viewFields"] = array();
$tdatapromociones[".viewFields"][] = "empresa_id";
$tdatapromociones[".viewFields"][] = "descripcion";

$tdatapromociones[".addFields"] = array();
$tdatapromociones[".addFields"][] = "descripcion";

$tdatapromociones[".masterListFields"] = array();
$tdatapromociones[".masterListFields"][] = "id";
$tdatapromociones[".masterListFields"][] = "empresa_id";
$tdatapromociones[".masterListFields"][] = "descripcion";
$tdatapromociones[".masterListFields"][] = "creado_por";
$tdatapromociones[".masterListFields"][] = "actualizado_por";
$tdatapromociones[".masterListFields"][] = "creado";
$tdatapromociones[".masterListFields"][] = "actualizado";

$tdatapromociones[".inlineAddFields"] = array();

$tdatapromociones[".editFields"] = array();
$tdatapromociones[".editFields"][] = "empresa_id";
$tdatapromociones[".editFields"][] = "descripcion";

$tdatapromociones[".inlineEditFields"] = array();

$tdatapromociones[".updateSelectedFields"] = array();
$tdatapromociones[".updateSelectedFields"][] = "empresa_id";
$tdatapromociones[".updateSelectedFields"][] = "descripcion";


$tdatapromociones[".exportFields"] = array();
$tdatapromociones[".exportFields"][] = "empresa_id";
$tdatapromociones[".exportFields"][] = "descripcion";

$tdatapromociones[".importFields"] = array();
$tdatapromociones[".importFields"][] = "empresa_id";
$tdatapromociones[".importFields"][] = "descripcion";

$tdatapromociones[".printFields"] = array();
$tdatapromociones[".printFields"][] = "empresa_id";
$tdatapromociones[".printFields"][] = "descripcion";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "promociones";
	$fdata["Label"] = GetFieldLabel("promociones","id");
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








	$tdatapromociones["id"] = $fdata;
//	empresa_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "empresa_id";
	$fdata["GoodName"] = "empresa_id";
	$fdata["ownerTable"] = "promociones";
	$fdata["Label"] = GetFieldLabel("promociones","empresa_id");
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




	$tdatapromociones["empresa_id"] = $fdata;
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "promociones";
	$fdata["Label"] = GetFieldLabel("promociones","descripcion");
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




	$tdatapromociones["descripcion"] = $fdata;
//	creado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "creado_por";
	$fdata["GoodName"] = "creado_por";
	$fdata["ownerTable"] = "promociones";
	$fdata["Label"] = GetFieldLabel("promociones","creado_por");
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








	$tdatapromociones["creado_por"] = $fdata;
//	actualizado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "actualizado_por";
	$fdata["GoodName"] = "actualizado_por";
	$fdata["ownerTable"] = "promociones";
	$fdata["Label"] = GetFieldLabel("promociones","actualizado_por");
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








	$tdatapromociones["actualizado_por"] = $fdata;
//	creado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "creado";
	$fdata["GoodName"] = "creado";
	$fdata["ownerTable"] = "promociones";
	$fdata["Label"] = GetFieldLabel("promociones","creado");
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








	$tdatapromociones["creado"] = $fdata;
//	actualizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "actualizado";
	$fdata["GoodName"] = "actualizado";
	$fdata["ownerTable"] = "promociones";
	$fdata["Label"] = GetFieldLabel("promociones","actualizado");
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








	$tdatapromociones["actualizado"] = $fdata;


$tables_data["promociones"]=&$tdatapromociones;
$field_labels["promociones"] = &$fieldLabelspromociones;
$fieldToolTips["promociones"] = &$fieldToolTipspromociones;
$placeHolders["promociones"] = &$placeHolderspromociones;
$page_titles["promociones"] = &$pageTitlespromociones;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["promociones"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["promociones"] = array();


	
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
					$masterTablesData["promociones"][0] = $masterParams;
				$masterTablesData["promociones"][0]["masterKeys"] = array();
	$masterTablesData["promociones"][0]["masterKeys"][]="id";
				$masterTablesData["promociones"][0]["detailKeys"] = array();
	$masterTablesData["promociones"][0]["detailKeys"][]="empresa_id";
		
	
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
					$masterTablesData["promociones"][1] = $masterParams;
				$masterTablesData["promociones"][1]["masterKeys"] = array();
	$masterTablesData["promociones"][1]["masterKeys"][]="id";
				$masterTablesData["promociones"][1]["detailKeys"] = array();
	$masterTablesData["promociones"][1]["detailKeys"][]="actualizado_por";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_promociones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	empresa_id,  	descripcion,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$proto0["m_strFrom"] = "FROM promociones";
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
	"m_strTable" => "promociones",
	"m_srcTableName" => "promociones"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "promociones";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "empresa_id",
	"m_strTable" => "promociones",
	"m_srcTableName" => "promociones"
));

$proto8["m_sql"] = "empresa_id";
$proto8["m_srcTableName"] = "promociones";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "promociones",
	"m_srcTableName" => "promociones"
));

$proto10["m_sql"] = "descripcion";
$proto10["m_srcTableName"] = "promociones";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "creado_por",
	"m_strTable" => "promociones",
	"m_srcTableName" => "promociones"
));

$proto12["m_sql"] = "creado_por";
$proto12["m_srcTableName"] = "promociones";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado_por",
	"m_strTable" => "promociones",
	"m_srcTableName" => "promociones"
));

$proto14["m_sql"] = "actualizado_por";
$proto14["m_srcTableName"] = "promociones";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "creado",
	"m_strTable" => "promociones",
	"m_srcTableName" => "promociones"
));

$proto16["m_sql"] = "creado";
$proto16["m_srcTableName"] = "promociones";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado",
	"m_strTable" => "promociones",
	"m_srcTableName" => "promociones"
));

$proto18["m_sql"] = "actualizado";
$proto18["m_srcTableName"] = "promociones";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "promociones";
$proto21["m_srcTableName"] = "promociones";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "empresa_id";
$proto21["m_columns"][] = "descripcion";
$proto21["m_columns"][] = "creado_por";
$proto21["m_columns"][] = "actualizado_por";
$proto21["m_columns"][] = "creado";
$proto21["m_columns"][] = "actualizado";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "promociones";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "promociones";
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
$proto0["m_srcTableName"]="promociones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_promociones = createSqlQuery_promociones();


	
		;

							

$tdatapromociones[".sqlquery"] = $queryData_promociones;

$tableEvents["promociones"] = new eventsBase;
$tdatapromociones[".hasEvents"] = false;

?>