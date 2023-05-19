<?php
require_once(getabspath("classes/cipherer.php"));




$tdatainsumos = array();
	$tdatainsumos[".truncateText"] = true;
	$tdatainsumos[".NumberOfChars"] = 80;
	$tdatainsumos[".ShortName"] = "insumos";
	$tdatainsumos[".OwnerID"] = "empresa_id";
	$tdatainsumos[".OriginalTable"] = "insumos";

//	field labels
$fieldLabelsinsumos = array();
$fieldToolTipsinsumos = array();
$pageTitlesinsumos = array();
$placeHoldersinsumos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinsumos["Spanish"] = array();
	$fieldToolTipsinsumos["Spanish"] = array();
	$placeHoldersinsumos["Spanish"] = array();
	$pageTitlesinsumos["Spanish"] = array();
	$fieldLabelsinsumos["Spanish"]["id"] = "Id";
	$fieldToolTipsinsumos["Spanish"]["id"] = "";
	$placeHoldersinsumos["Spanish"]["id"] = "";
	$fieldLabelsinsumos["Spanish"]["empresa_id"] = "Empresa";
	$fieldToolTipsinsumos["Spanish"]["empresa_id"] = "";
	$placeHoldersinsumos["Spanish"]["empresa_id"] = "";
	$fieldLabelsinsumos["Spanish"]["creado_por"] = "Creado Por";
	$fieldToolTipsinsumos["Spanish"]["creado_por"] = "";
	$placeHoldersinsumos["Spanish"]["creado_por"] = "";
	$fieldLabelsinsumos["Spanish"]["actualizado_por"] = "Actualizado Por";
	$fieldToolTipsinsumos["Spanish"]["actualizado_por"] = "";
	$placeHoldersinsumos["Spanish"]["actualizado_por"] = "";
	$fieldLabelsinsumos["Spanish"]["creado"] = "Creado";
	$fieldToolTipsinsumos["Spanish"]["creado"] = "";
	$placeHoldersinsumos["Spanish"]["creado"] = "";
	$fieldLabelsinsumos["Spanish"]["actualizado"] = "Actualizado";
	$fieldToolTipsinsumos["Spanish"]["actualizado"] = "";
	$placeHoldersinsumos["Spanish"]["actualizado"] = "";
	if (count($fieldToolTipsinsumos["Spanish"]))
		$tdatainsumos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsinsumos[""] = array();
	$fieldToolTipsinsumos[""] = array();
	$placeHoldersinsumos[""] = array();
	$pageTitlesinsumos[""] = array();
	if (count($fieldToolTipsinsumos[""]))
		$tdatainsumos[".isUseToolTips"] = true;
}


	$tdatainsumos[".NCSearch"] = true;



$tdatainsumos[".shortTableName"] = "insumos";
$tdatainsumos[".nSecOptions"] = 1;
$tdatainsumos[".recsPerRowPrint"] = 1;
$tdatainsumos[".mainTableOwnerID"] = "empresa_id";
$tdatainsumos[".moveNext"] = 1;
$tdatainsumos[".entityType"] = 0;

$tdatainsumos[".strOriginalTableName"] = "insumos";

	



$tdatainsumos[".showAddInPopup"] = false;

$tdatainsumos[".showEditInPopup"] = false;

$tdatainsumos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainsumos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainsumos[".fieldsForRegister"] = array();

$tdatainsumos[".listAjax"] = false;

	$tdatainsumos[".audit"] = false;

	$tdatainsumos[".locking"] = false;

$tdatainsumos[".edit"] = true;
$tdatainsumos[".afterEditAction"] = 1;
$tdatainsumos[".closePopupAfterEdit"] = 1;
$tdatainsumos[".afterEditActionDetTable"] = "";

$tdatainsumos[".add"] = true;
$tdatainsumos[".afterAddAction"] = 1;
$tdatainsumos[".closePopupAfterAdd"] = 1;
$tdatainsumos[".afterAddActionDetTable"] = "";

$tdatainsumos[".list"] = true;



$tdatainsumos[".reorderRecordsByHeader"] = true;


$tdatainsumos[".exportFormatting"] = 2;
$tdatainsumos[".exportDelimiter"] = ",";
		
$tdatainsumos[".view"] = true;

$tdatainsumos[".import"] = true;

$tdatainsumos[".exportTo"] = true;

$tdatainsumos[".printFriendly"] = true;

$tdatainsumos[".delete"] = true;

$tdatainsumos[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatainsumos[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatainsumos[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatainsumos[".searchSaving"] = false;
//

$tdatainsumos[".showSearchPanel"] = true;
		$tdatainsumos[".flexibleSearch"] = true;

$tdatainsumos[".isUseAjaxSuggest"] = true;

$tdatainsumos[".rowHighlite"] = true;





$tdatainsumos[".ajaxCodeSnippetAdded"] = false;

$tdatainsumos[".buttonsAdded"] = false;

$tdatainsumos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainsumos[".isUseTimeForSearch"] = false;



$tdatainsumos[".badgeColor"] = "D2691E";


$tdatainsumos[".allSearchFields"] = array();
$tdatainsumos[".filterFields"] = array();
$tdatainsumos[".requiredSearchFields"] = array();



$tdatainsumos[".googleLikeFields"] = array();
$tdatainsumos[".googleLikeFields"][] = "id";
$tdatainsumos[".googleLikeFields"][] = "empresa_id";
$tdatainsumos[".googleLikeFields"][] = "creado_por";
$tdatainsumos[".googleLikeFields"][] = "actualizado_por";
$tdatainsumos[".googleLikeFields"][] = "creado";
$tdatainsumos[".googleLikeFields"][] = "actualizado";



$tdatainsumos[".tableType"] = "list";

$tdatainsumos[".printerPageOrientation"] = 0;
$tdatainsumos[".nPrinterPageScale"] = 100;

$tdatainsumos[".nPrinterSplitRecords"] = 40;

$tdatainsumos[".nPrinterPDFSplitRecords"] = 40;



$tdatainsumos[".geocodingEnabled"] = false;





$tdatainsumos[".listGridLayout"] = 3;


$tdatainsumos[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdatainsumos[".pageSize"] = 20;

$tdatainsumos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainsumos[".strOrderBy"] = $tstrOrderBy;

$tdatainsumos[".orderindexes"] = array();

$tdatainsumos[".sqlHead"] = "SELECT id,  	empresa_id,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$tdatainsumos[".sqlFrom"] = "FROM insumos";
$tdatainsumos[".sqlWhereExpr"] = "";
$tdatainsumos[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainsumos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainsumos[".arrGroupsPerPage"] = $arrGPP;

$tdatainsumos[".highlightSearchResults"] = true;

$tableKeysinsumos = array();
$tableKeysinsumos[] = "id";
$tdatainsumos[".Keys"] = $tableKeysinsumos;

$tdatainsumos[".listFields"] = array();
$tdatainsumos[".listFields"][] = "creado_por";
$tdatainsumos[".listFields"][] = "actualizado_por";
$tdatainsumos[".listFields"][] = "creado";
$tdatainsumos[".listFields"][] = "actualizado";

$tdatainsumos[".hideMobileList"] = array();


$tdatainsumos[".viewFields"] = array();

$tdatainsumos[".addFields"] = array();

$tdatainsumos[".masterListFields"] = array();
$tdatainsumos[".masterListFields"][] = "id";
$tdatainsumos[".masterListFields"][] = "empresa_id";
$tdatainsumos[".masterListFields"][] = "creado_por";
$tdatainsumos[".masterListFields"][] = "actualizado_por";
$tdatainsumos[".masterListFields"][] = "creado";
$tdatainsumos[".masterListFields"][] = "actualizado";

$tdatainsumos[".inlineAddFields"] = array();

$tdatainsumos[".editFields"] = array();

$tdatainsumos[".inlineEditFields"] = array();

$tdatainsumos[".updateSelectedFields"] = array();


$tdatainsumos[".exportFields"] = array();

$tdatainsumos[".importFields"] = array();

$tdatainsumos[".printFields"] = array();


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "insumos";
	$fdata["Label"] = GetFieldLabel("insumos","id");
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








	$tdatainsumos["id"] = $fdata;
//	empresa_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "empresa_id";
	$fdata["GoodName"] = "empresa_id";
	$fdata["ownerTable"] = "insumos";
	$fdata["Label"] = GetFieldLabel("insumos","empresa_id");
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








	$tdatainsumos["empresa_id"] = $fdata;
//	creado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "creado_por";
	$fdata["GoodName"] = "creado_por";
	$fdata["ownerTable"] = "insumos";
	$fdata["Label"] = GetFieldLabel("insumos","creado_por");
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








	$tdatainsumos["creado_por"] = $fdata;
//	actualizado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "actualizado_por";
	$fdata["GoodName"] = "actualizado_por";
	$fdata["ownerTable"] = "insumos";
	$fdata["Label"] = GetFieldLabel("insumos","actualizado_por");
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








	$tdatainsumos["actualizado_por"] = $fdata;
//	creado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "creado";
	$fdata["GoodName"] = "creado";
	$fdata["ownerTable"] = "insumos";
	$fdata["Label"] = GetFieldLabel("insumos","creado");
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








	$tdatainsumos["creado"] = $fdata;
//	actualizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "actualizado";
	$fdata["GoodName"] = "actualizado";
	$fdata["ownerTable"] = "insumos";
	$fdata["Label"] = GetFieldLabel("insumos","actualizado");
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








	$tdatainsumos["actualizado"] = $fdata;


$tables_data["insumos"]=&$tdatainsumos;
$field_labels["insumos"] = &$fieldLabelsinsumos;
$fieldToolTips["insumos"] = &$fieldToolTipsinsumos;
$placeHolders["insumos"] = &$placeHoldersinsumos;
$page_titles["insumos"] = &$pageTitlesinsumos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["insumos"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["insumos"] = array();


	
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
					$masterTablesData["insumos"][0] = $masterParams;
				$masterTablesData["insumos"][0]["masterKeys"] = array();
	$masterTablesData["insumos"][0]["masterKeys"][]="id";
				$masterTablesData["insumos"][0]["detailKeys"] = array();
	$masterTablesData["insumos"][0]["detailKeys"][]="empresa_id";
		
	
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
					$masterTablesData["insumos"][1] = $masterParams;
				$masterTablesData["insumos"][1]["masterKeys"] = array();
	$masterTablesData["insumos"][1]["masterKeys"][]="id";
				$masterTablesData["insumos"][1]["detailKeys"] = array();
	$masterTablesData["insumos"][1]["detailKeys"][]="actualizado_por";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_insumos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	empresa_id,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$proto0["m_strFrom"] = "FROM insumos";
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
	"m_strTable" => "insumos",
	"m_srcTableName" => "insumos"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "insumos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "empresa_id",
	"m_strTable" => "insumos",
	"m_srcTableName" => "insumos"
));

$proto8["m_sql"] = "empresa_id";
$proto8["m_srcTableName"] = "insumos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "creado_por",
	"m_strTable" => "insumos",
	"m_srcTableName" => "insumos"
));

$proto10["m_sql"] = "creado_por";
$proto10["m_srcTableName"] = "insumos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado_por",
	"m_strTable" => "insumos",
	"m_srcTableName" => "insumos"
));

$proto12["m_sql"] = "actualizado_por";
$proto12["m_srcTableName"] = "insumos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "creado",
	"m_strTable" => "insumos",
	"m_srcTableName" => "insumos"
));

$proto14["m_sql"] = "creado";
$proto14["m_srcTableName"] = "insumos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado",
	"m_strTable" => "insumos",
	"m_srcTableName" => "insumos"
));

$proto16["m_sql"] = "actualizado";
$proto16["m_srcTableName"] = "insumos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "insumos";
$proto19["m_srcTableName"] = "insumos";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "empresa_id";
$proto19["m_columns"][] = "creado_por";
$proto19["m_columns"][] = "actualizado_por";
$proto19["m_columns"][] = "creado";
$proto19["m_columns"][] = "actualizado";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "insumos";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "insumos";
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
$proto0["m_srcTableName"]="insumos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_insumos = createSqlQuery_insumos();


	
		;

						

$tdatainsumos[".sqlquery"] = $queryData_insumos;

$tableEvents["insumos"] = new eventsBase;
$tdatainsumos[".hasEvents"] = false;

?>