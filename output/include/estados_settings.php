<?php
require_once(getabspath("classes/cipherer.php"));




$tdataestados = array();
	$tdataestados[".truncateText"] = true;
	$tdataestados[".NumberOfChars"] = 80;
	$tdataestados[".ShortName"] = "estados";
	$tdataestados[".OwnerID"] = "";
	$tdataestados[".OriginalTable"] = "estados";

//	field labels
$fieldLabelsestados = array();
$fieldToolTipsestados = array();
$pageTitlesestados = array();
$placeHoldersestados = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsestados["Spanish"] = array();
	$fieldToolTipsestados["Spanish"] = array();
	$placeHoldersestados["Spanish"] = array();
	$pageTitlesestados["Spanish"] = array();
	$fieldLabelsestados["Spanish"]["id"] = "Id";
	$fieldToolTipsestados["Spanish"]["id"] = "";
	$placeHoldersestados["Spanish"]["id"] = "";
	$fieldLabelsestados["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipsestados["Spanish"]["descripcion"] = "";
	$placeHoldersestados["Spanish"]["descripcion"] = "";
	$fieldLabelsestados["Spanish"]["creado_por"] = "Creado Por";
	$fieldToolTipsestados["Spanish"]["creado_por"] = "";
	$placeHoldersestados["Spanish"]["creado_por"] = "";
	$fieldLabelsestados["Spanish"]["actualizado_por"] = "Actualizado Por";
	$fieldToolTipsestados["Spanish"]["actualizado_por"] = "";
	$placeHoldersestados["Spanish"]["actualizado_por"] = "";
	$fieldLabelsestados["Spanish"]["creado"] = "Creado";
	$fieldToolTipsestados["Spanish"]["creado"] = "";
	$placeHoldersestados["Spanish"]["creado"] = "";
	$fieldLabelsestados["Spanish"]["actualizado"] = "Actualizado";
	$fieldToolTipsestados["Spanish"]["actualizado"] = "";
	$placeHoldersestados["Spanish"]["actualizado"] = "";
	if (count($fieldToolTipsestados["Spanish"]))
		$tdataestados[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsestados[""] = array();
	$fieldToolTipsestados[""] = array();
	$placeHoldersestados[""] = array();
	$pageTitlesestados[""] = array();
	if (count($fieldToolTipsestados[""]))
		$tdataestados[".isUseToolTips"] = true;
}


	$tdataestados[".NCSearch"] = true;



$tdataestados[".shortTableName"] = "estados";
$tdataestados[".nSecOptions"] = 0;
$tdataestados[".recsPerRowPrint"] = 1;
$tdataestados[".mainTableOwnerID"] = "";
$tdataestados[".moveNext"] = 1;
$tdataestados[".entityType"] = 0;

$tdataestados[".strOriginalTableName"] = "estados";

	



$tdataestados[".showAddInPopup"] = false;

$tdataestados[".showEditInPopup"] = false;

$tdataestados[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataestados[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataestados[".fieldsForRegister"] = array();

$tdataestados[".listAjax"] = false;

	$tdataestados[".audit"] = false;

	$tdataestados[".locking"] = false;

$tdataestados[".edit"] = true;
$tdataestados[".afterEditAction"] = 1;
$tdataestados[".closePopupAfterEdit"] = 1;
$tdataestados[".afterEditActionDetTable"] = "";

$tdataestados[".add"] = true;
$tdataestados[".afterAddAction"] = 1;
$tdataestados[".closePopupAfterAdd"] = 1;
$tdataestados[".afterAddActionDetTable"] = "";

$tdataestados[".list"] = true;



$tdataestados[".reorderRecordsByHeader"] = true;


$tdataestados[".exportFormatting"] = 2;
$tdataestados[".exportDelimiter"] = ",";
		
$tdataestados[".view"] = true;

$tdataestados[".import"] = true;

$tdataestados[".exportTo"] = true;

$tdataestados[".printFriendly"] = true;

$tdataestados[".delete"] = true;

$tdataestados[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataestados[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataestados[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataestados[".searchSaving"] = false;
//

$tdataestados[".showSearchPanel"] = true;
		$tdataestados[".flexibleSearch"] = true;

$tdataestados[".isUseAjaxSuggest"] = true;

$tdataestados[".rowHighlite"] = true;





$tdataestados[".ajaxCodeSnippetAdded"] = false;

$tdataestados[".buttonsAdded"] = false;

$tdataestados[".addPageEvents"] = false;

// use timepicker for search panel
$tdataestados[".isUseTimeForSearch"] = false;



$tdataestados[".badgeColor"] = "CD5C5C";


$tdataestados[".allSearchFields"] = array();
$tdataestados[".filterFields"] = array();
$tdataestados[".requiredSearchFields"] = array();

$tdataestados[".allSearchFields"][] = "descripcion";
	

$tdataestados[".googleLikeFields"] = array();
$tdataestados[".googleLikeFields"][] = "id";
$tdataestados[".googleLikeFields"][] = "descripcion";
$tdataestados[".googleLikeFields"][] = "creado_por";
$tdataestados[".googleLikeFields"][] = "actualizado_por";
$tdataestados[".googleLikeFields"][] = "creado";
$tdataestados[".googleLikeFields"][] = "actualizado";


$tdataestados[".advSearchFields"] = array();
$tdataestados[".advSearchFields"][] = "descripcion";

$tdataestados[".tableType"] = "list";

$tdataestados[".printerPageOrientation"] = 0;
$tdataestados[".nPrinterPageScale"] = 100;

$tdataestados[".nPrinterSplitRecords"] = 40;

$tdataestados[".nPrinterPDFSplitRecords"] = 40;



$tdataestados[".geocodingEnabled"] = false;





$tdataestados[".listGridLayout"] = 3;


$tdataestados[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdataestados[".pageSize"] = 20;

$tdataestados[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataestados[".strOrderBy"] = $tstrOrderBy;

$tdataestados[".orderindexes"] = array();

$tdataestados[".sqlHead"] = "SELECT id,  	descripcion,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$tdataestados[".sqlFrom"] = "FROM estados";
$tdataestados[".sqlWhereExpr"] = "";
$tdataestados[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataestados[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataestados[".arrGroupsPerPage"] = $arrGPP;

$tdataestados[".highlightSearchResults"] = true;

$tableKeysestados = array();
$tableKeysestados[] = "id";
$tdataestados[".Keys"] = $tableKeysestados;

$tdataestados[".listFields"] = array();
$tdataestados[".listFields"][] = "descripcion";
$tdataestados[".listFields"][] = "creado_por";
$tdataestados[".listFields"][] = "actualizado_por";
$tdataestados[".listFields"][] = "creado";
$tdataestados[".listFields"][] = "actualizado";

$tdataestados[".hideMobileList"] = array();


$tdataestados[".viewFields"] = array();
$tdataestados[".viewFields"][] = "descripcion";

$tdataestados[".addFields"] = array();
$tdataestados[".addFields"][] = "descripcion";

$tdataestados[".masterListFields"] = array();
$tdataestados[".masterListFields"][] = "descripcion";

$tdataestados[".inlineAddFields"] = array();

$tdataestados[".editFields"] = array();
$tdataestados[".editFields"][] = "descripcion";

$tdataestados[".inlineEditFields"] = array();

$tdataestados[".updateSelectedFields"] = array();
$tdataestados[".updateSelectedFields"][] = "descripcion";


$tdataestados[".exportFields"] = array();
$tdataestados[".exportFields"][] = "descripcion";

$tdataestados[".importFields"] = array();
$tdataestados[".importFields"][] = "descripcion";

$tdataestados[".printFields"] = array();
$tdataestados[".printFields"][] = "descripcion";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "estados";
	$fdata["Label"] = GetFieldLabel("estados","id");
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








	$tdataestados["id"] = $fdata;
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "estados";
	$fdata["Label"] = GetFieldLabel("estados","descripcion");
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




	$tdataestados["descripcion"] = $fdata;
//	creado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "creado_por";
	$fdata["GoodName"] = "creado_por";
	$fdata["ownerTable"] = "estados";
	$fdata["Label"] = GetFieldLabel("estados","creado_por");
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








	$tdataestados["creado_por"] = $fdata;
//	actualizado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "actualizado_por";
	$fdata["GoodName"] = "actualizado_por";
	$fdata["ownerTable"] = "estados";
	$fdata["Label"] = GetFieldLabel("estados","actualizado_por");
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








	$tdataestados["actualizado_por"] = $fdata;
//	creado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "creado";
	$fdata["GoodName"] = "creado";
	$fdata["ownerTable"] = "estados";
	$fdata["Label"] = GetFieldLabel("estados","creado");
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








	$tdataestados["creado"] = $fdata;
//	actualizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "actualizado";
	$fdata["GoodName"] = "actualizado";
	$fdata["ownerTable"] = "estados";
	$fdata["Label"] = GetFieldLabel("estados","actualizado");
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








	$tdataestados["actualizado"] = $fdata;


$tables_data["estados"]=&$tdataestados;
$field_labels["estados"] = &$fieldLabelsestados;
$fieldToolTips["estados"] = &$fieldToolTipsestados;
$placeHolders["estados"] = &$placeHoldersestados;
$page_titles["estados"] = &$pageTitlesestados;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["estados"] = array();
//	pedidos
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="pedidos";
		$detailsParam["dOriginalTable"] = "pedidos";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "pedidos";
	$detailsParam["dCaptionTable"] = GetTableCaption("pedidos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["estados"][$dIndex] = $detailsParam;

	
		$detailsTablesData["estados"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["estados"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["estados"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["estados"][$dIndex]["detailKeys"][]="estado_id";

// tables which are master tables for current table (detail)
$masterTablesData["estados"] = array();


	
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
					$masterTablesData["estados"][0] = $masterParams;
				$masterTablesData["estados"][0]["masterKeys"] = array();
	$masterTablesData["estados"][0]["masterKeys"][]="id";
				$masterTablesData["estados"][0]["detailKeys"] = array();
	$masterTablesData["estados"][0]["detailKeys"][]="actualizado_por";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_estados()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	descripcion,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$proto0["m_strFrom"] = "FROM estados";
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
	"m_strTable" => "estados",
	"m_srcTableName" => "estados"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "estados";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "estados",
	"m_srcTableName" => "estados"
));

$proto8["m_sql"] = "descripcion";
$proto8["m_srcTableName"] = "estados";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "creado_por",
	"m_strTable" => "estados",
	"m_srcTableName" => "estados"
));

$proto10["m_sql"] = "creado_por";
$proto10["m_srcTableName"] = "estados";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado_por",
	"m_strTable" => "estados",
	"m_srcTableName" => "estados"
));

$proto12["m_sql"] = "actualizado_por";
$proto12["m_srcTableName"] = "estados";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "creado",
	"m_strTable" => "estados",
	"m_srcTableName" => "estados"
));

$proto14["m_sql"] = "creado";
$proto14["m_srcTableName"] = "estados";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado",
	"m_strTable" => "estados",
	"m_srcTableName" => "estados"
));

$proto16["m_sql"] = "actualizado";
$proto16["m_srcTableName"] = "estados";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "estados";
$proto19["m_srcTableName"] = "estados";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "descripcion";
$proto19["m_columns"][] = "creado_por";
$proto19["m_columns"][] = "actualizado_por";
$proto19["m_columns"][] = "creado";
$proto19["m_columns"][] = "actualizado";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "estados";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "estados";
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
$proto0["m_srcTableName"]="estados";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_estados = createSqlQuery_estados();


	
		;

						

$tdataestados[".sqlquery"] = $queryData_estados;

$tableEvents["estados"] = new eventsBase;
$tdataestados[".hasEvents"] = false;

?>