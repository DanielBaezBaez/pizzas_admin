<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapedidos = array();
	$tdatapedidos[".truncateText"] = true;
	$tdatapedidos[".NumberOfChars"] = 80;
	$tdatapedidos[".ShortName"] = "pedidos";
	$tdatapedidos[".OwnerID"] = "empresa_id";
	$tdatapedidos[".OriginalTable"] = "pedidos";

//	field labels
$fieldLabelspedidos = array();
$fieldToolTipspedidos = array();
$pageTitlespedidos = array();
$placeHolderspedidos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspedidos["Spanish"] = array();
	$fieldToolTipspedidos["Spanish"] = array();
	$placeHolderspedidos["Spanish"] = array();
	$pageTitlespedidos["Spanish"] = array();
	$fieldLabelspedidos["Spanish"]["id"] = "Id";
	$fieldToolTipspedidos["Spanish"]["id"] = "";
	$placeHolderspedidos["Spanish"]["id"] = "";
	$fieldLabelspedidos["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipspedidos["Spanish"]["fecha"] = "";
	$placeHolderspedidos["Spanish"]["fecha"] = "";
	$fieldLabelspedidos["Spanish"]["latitud"] = "Latitud";
	$fieldToolTipspedidos["Spanish"]["latitud"] = "";
	$placeHolderspedidos["Spanish"]["latitud"] = "";
	$fieldLabelspedidos["Spanish"]["longitud"] = "Longitud";
	$fieldToolTipspedidos["Spanish"]["longitud"] = "";
	$placeHolderspedidos["Spanish"]["longitud"] = "";
	$fieldLabelspedidos["Spanish"]["delivery"] = "Delivery";
	$fieldToolTipspedidos["Spanish"]["delivery"] = "";
	$placeHolderspedidos["Spanish"]["delivery"] = "";
	$fieldLabelspedidos["Spanish"]["total"] = "Total";
	$fieldToolTipspedidos["Spanish"]["total"] = "";
	$placeHolderspedidos["Spanish"]["total"] = "";
	$fieldLabelspedidos["Spanish"]["estado_id"] = "Estado";
	$fieldToolTipspedidos["Spanish"]["estado_id"] = "";
	$placeHolderspedidos["Spanish"]["estado_id"] = "";
	$fieldLabelspedidos["Spanish"]["plataforma"] = "Plataforma";
	$fieldToolTipspedidos["Spanish"]["plataforma"] = "";
	$placeHolderspedidos["Spanish"]["plataforma"] = "";
	$fieldLabelspedidos["Spanish"]["observacion"] = "Observacion";
	$fieldToolTipspedidos["Spanish"]["observacion"] = "";
	$placeHolderspedidos["Spanish"]["observacion"] = "";
	$fieldLabelspedidos["Spanish"]["empresa_id"] = "Empresa Id";
	$fieldToolTipspedidos["Spanish"]["empresa_id"] = "";
	$placeHolderspedidos["Spanish"]["empresa_id"] = "";
	$fieldLabelspedidos["Spanish"]["user_id"] = "Usuario";
	$fieldToolTipspedidos["Spanish"]["user_id"] = "";
	$placeHolderspedidos["Spanish"]["user_id"] = "";
	$fieldLabelspedidos["Spanish"]["creado_por"] = "Creado Por";
	$fieldToolTipspedidos["Spanish"]["creado_por"] = "";
	$placeHolderspedidos["Spanish"]["creado_por"] = "";
	$fieldLabelspedidos["Spanish"]["actualizado_por"] = "Actualizado Por";
	$fieldToolTipspedidos["Spanish"]["actualizado_por"] = "";
	$placeHolderspedidos["Spanish"]["actualizado_por"] = "";
	$fieldLabelspedidos["Spanish"]["creado"] = "Creado";
	$fieldToolTipspedidos["Spanish"]["creado"] = "";
	$placeHolderspedidos["Spanish"]["creado"] = "";
	$fieldLabelspedidos["Spanish"]["actualizado"] = "Actualizado";
	$fieldToolTipspedidos["Spanish"]["actualizado"] = "";
	$placeHolderspedidos["Spanish"]["actualizado"] = "";
	if (count($fieldToolTipspedidos["Spanish"]))
		$tdatapedidos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspedidos[""] = array();
	$fieldToolTipspedidos[""] = array();
	$placeHolderspedidos[""] = array();
	$pageTitlespedidos[""] = array();
	if (count($fieldToolTipspedidos[""]))
		$tdatapedidos[".isUseToolTips"] = true;
}


	$tdatapedidos[".NCSearch"] = true;



$tdatapedidos[".shortTableName"] = "pedidos";
$tdatapedidos[".nSecOptions"] = 1;
$tdatapedidos[".recsPerRowPrint"] = 1;
$tdatapedidos[".mainTableOwnerID"] = "empresa_id";
$tdatapedidos[".moveNext"] = 1;
$tdatapedidos[".entityType"] = 0;

$tdatapedidos[".strOriginalTableName"] = "pedidos";

	



$tdatapedidos[".showAddInPopup"] = false;

$tdatapedidos[".showEditInPopup"] = false;

$tdatapedidos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapedidos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapedidos[".fieldsForRegister"] = array();

$tdatapedidos[".listAjax"] = false;

	$tdatapedidos[".audit"] = false;

	$tdatapedidos[".locking"] = false;

$tdatapedidos[".edit"] = true;
$tdatapedidos[".afterEditAction"] = 1;
$tdatapedidos[".closePopupAfterEdit"] = 1;
$tdatapedidos[".afterEditActionDetTable"] = "";

$tdatapedidos[".add"] = true;
$tdatapedidos[".afterAddAction"] = 1;
$tdatapedidos[".closePopupAfterAdd"] = 1;
$tdatapedidos[".afterAddActionDetTable"] = "";

$tdatapedidos[".list"] = true;



$tdatapedidos[".reorderRecordsByHeader"] = true;


$tdatapedidos[".exportFormatting"] = 2;
$tdatapedidos[".exportDelimiter"] = ",";
		
$tdatapedidos[".view"] = true;

$tdatapedidos[".import"] = true;

$tdatapedidos[".exportTo"] = true;

$tdatapedidos[".printFriendly"] = true;

$tdatapedidos[".delete"] = true;

$tdatapedidos[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapedidos[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatapedidos[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatapedidos[".searchSaving"] = false;
//

$tdatapedidos[".showSearchPanel"] = true;
		$tdatapedidos[".flexibleSearch"] = true;

$tdatapedidos[".isUseAjaxSuggest"] = true;

$tdatapedidos[".rowHighlite"] = true;





$tdatapedidos[".ajaxCodeSnippetAdded"] = false;

$tdatapedidos[".buttonsAdded"] = false;

$tdatapedidos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapedidos[".isUseTimeForSearch"] = false;



$tdatapedidos[".badgeColor"] = "4169E1";


$tdatapedidos[".allSearchFields"] = array();
$tdatapedidos[".filterFields"] = array();
$tdatapedidos[".requiredSearchFields"] = array();

$tdatapedidos[".allSearchFields"][] = "fecha";
	$tdatapedidos[".allSearchFields"][] = "latitud";
	$tdatapedidos[".allSearchFields"][] = "longitud";
	$tdatapedidos[".allSearchFields"][] = "delivery";
	$tdatapedidos[".allSearchFields"][] = "total";
	$tdatapedidos[".allSearchFields"][] = "estado_id";
	$tdatapedidos[".allSearchFields"][] = "plataforma";
	$tdatapedidos[".allSearchFields"][] = "observacion";
	$tdatapedidos[".allSearchFields"][] = "user_id";
	

$tdatapedidos[".googleLikeFields"] = array();
$tdatapedidos[".googleLikeFields"][] = "id";
$tdatapedidos[".googleLikeFields"][] = "fecha";
$tdatapedidos[".googleLikeFields"][] = "latitud";
$tdatapedidos[".googleLikeFields"][] = "longitud";
$tdatapedidos[".googleLikeFields"][] = "delivery";
$tdatapedidos[".googleLikeFields"][] = "total";
$tdatapedidos[".googleLikeFields"][] = "estado_id";
$tdatapedidos[".googleLikeFields"][] = "plataforma";
$tdatapedidos[".googleLikeFields"][] = "observacion";
$tdatapedidos[".googleLikeFields"][] = "empresa_id";
$tdatapedidos[".googleLikeFields"][] = "user_id";
$tdatapedidos[".googleLikeFields"][] = "creado_por";
$tdatapedidos[".googleLikeFields"][] = "actualizado_por";
$tdatapedidos[".googleLikeFields"][] = "creado";
$tdatapedidos[".googleLikeFields"][] = "actualizado";


$tdatapedidos[".advSearchFields"] = array();
$tdatapedidos[".advSearchFields"][] = "fecha";
$tdatapedidos[".advSearchFields"][] = "latitud";
$tdatapedidos[".advSearchFields"][] = "longitud";
$tdatapedidos[".advSearchFields"][] = "delivery";
$tdatapedidos[".advSearchFields"][] = "total";
$tdatapedidos[".advSearchFields"][] = "estado_id";
$tdatapedidos[".advSearchFields"][] = "plataforma";
$tdatapedidos[".advSearchFields"][] = "observacion";
$tdatapedidos[".advSearchFields"][] = "user_id";

$tdatapedidos[".tableType"] = "list";

$tdatapedidos[".printerPageOrientation"] = 0;
$tdatapedidos[".nPrinterPageScale"] = 100;

$tdatapedidos[".nPrinterSplitRecords"] = 40;

$tdatapedidos[".nPrinterPDFSplitRecords"] = 40;



$tdatapedidos[".geocodingEnabled"] = false;





$tdatapedidos[".listGridLayout"] = 3;


$tdatapedidos[".isResizeColumns"] = true;



// view page pdf

// print page pdf

$tdatapedidos[".totalsFields"] = array();
$tdatapedidos[".totalsFields"][] = array(
	"fName" => "total",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Currency');

$tdatapedidos[".pageSize"] = 20;

$tdatapedidos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapedidos[".strOrderBy"] = $tstrOrderBy;

$tdatapedidos[".orderindexes"] = array();

$tdatapedidos[".sqlHead"] = "SELECT id,  	fecha,  	latitud,  	longitud,  	delivery,  	total,  	estado_id,  	plataforma,  	observacion,  	empresa_id,  	user_id,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$tdatapedidos[".sqlFrom"] = "FROM pedidos";
$tdatapedidos[".sqlWhereExpr"] = "";
$tdatapedidos[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapedidos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapedidos[".arrGroupsPerPage"] = $arrGPP;

$tdatapedidos[".highlightSearchResults"] = true;

$tableKeyspedidos = array();
$tableKeyspedidos[] = "id";
$tdatapedidos[".Keys"] = $tableKeyspedidos;

$tdatapedidos[".listFields"] = array();
$tdatapedidos[".listFields"][] = "fecha";
$tdatapedidos[".listFields"][] = "latitud";
$tdatapedidos[".listFields"][] = "longitud";
$tdatapedidos[".listFields"][] = "delivery";
$tdatapedidos[".listFields"][] = "total";
$tdatapedidos[".listFields"][] = "estado_id";
$tdatapedidos[".listFields"][] = "plataforma";
$tdatapedidos[".listFields"][] = "observacion";
$tdatapedidos[".listFields"][] = "user_id";
$tdatapedidos[".listFields"][] = "creado_por";
$tdatapedidos[".listFields"][] = "actualizado_por";
$tdatapedidos[".listFields"][] = "creado";
$tdatapedidos[".listFields"][] = "actualizado";

$tdatapedidos[".hideMobileList"] = array();


$tdatapedidos[".viewFields"] = array();
$tdatapedidos[".viewFields"][] = "fecha";
$tdatapedidos[".viewFields"][] = "latitud";
$tdatapedidos[".viewFields"][] = "longitud";
$tdatapedidos[".viewFields"][] = "delivery";
$tdatapedidos[".viewFields"][] = "total";
$tdatapedidos[".viewFields"][] = "estado_id";
$tdatapedidos[".viewFields"][] = "plataforma";
$tdatapedidos[".viewFields"][] = "observacion";
$tdatapedidos[".viewFields"][] = "user_id";

$tdatapedidos[".addFields"] = array();
$tdatapedidos[".addFields"][] = "fecha";
$tdatapedidos[".addFields"][] = "latitud";
$tdatapedidos[".addFields"][] = "longitud";
$tdatapedidos[".addFields"][] = "delivery";
$tdatapedidos[".addFields"][] = "total";
$tdatapedidos[".addFields"][] = "estado_id";
$tdatapedidos[".addFields"][] = "plataforma";
$tdatapedidos[".addFields"][] = "observacion";
$tdatapedidos[".addFields"][] = "user_id";

$tdatapedidos[".masterListFields"] = array();
$tdatapedidos[".masterListFields"][] = "fecha";
$tdatapedidos[".masterListFields"][] = "latitud";
$tdatapedidos[".masterListFields"][] = "longitud";
$tdatapedidos[".masterListFields"][] = "delivery";
$tdatapedidos[".masterListFields"][] = "total";
$tdatapedidos[".masterListFields"][] = "estado_id";
$tdatapedidos[".masterListFields"][] = "plataforma";
$tdatapedidos[".masterListFields"][] = "observacion";
$tdatapedidos[".masterListFields"][] = "user_id";

$tdatapedidos[".inlineAddFields"] = array();

$tdatapedidos[".editFields"] = array();
$tdatapedidos[".editFields"][] = "fecha";
$tdatapedidos[".editFields"][] = "latitud";
$tdatapedidos[".editFields"][] = "longitud";
$tdatapedidos[".editFields"][] = "delivery";
$tdatapedidos[".editFields"][] = "total";
$tdatapedidos[".editFields"][] = "estado_id";
$tdatapedidos[".editFields"][] = "plataforma";
$tdatapedidos[".editFields"][] = "observacion";
$tdatapedidos[".editFields"][] = "user_id";

$tdatapedidos[".inlineEditFields"] = array();

$tdatapedidos[".updateSelectedFields"] = array();
$tdatapedidos[".updateSelectedFields"][] = "fecha";
$tdatapedidos[".updateSelectedFields"][] = "latitud";
$tdatapedidos[".updateSelectedFields"][] = "longitud";
$tdatapedidos[".updateSelectedFields"][] = "delivery";
$tdatapedidos[".updateSelectedFields"][] = "total";
$tdatapedidos[".updateSelectedFields"][] = "estado_id";
$tdatapedidos[".updateSelectedFields"][] = "plataforma";
$tdatapedidos[".updateSelectedFields"][] = "observacion";
$tdatapedidos[".updateSelectedFields"][] = "user_id";


$tdatapedidos[".exportFields"] = array();
$tdatapedidos[".exportFields"][] = "fecha";
$tdatapedidos[".exportFields"][] = "latitud";
$tdatapedidos[".exportFields"][] = "longitud";
$tdatapedidos[".exportFields"][] = "delivery";
$tdatapedidos[".exportFields"][] = "total";
$tdatapedidos[".exportFields"][] = "estado_id";
$tdatapedidos[".exportFields"][] = "plataforma";
$tdatapedidos[".exportFields"][] = "observacion";
$tdatapedidos[".exportFields"][] = "user_id";

$tdatapedidos[".importFields"] = array();
$tdatapedidos[".importFields"][] = "fecha";
$tdatapedidos[".importFields"][] = "latitud";
$tdatapedidos[".importFields"][] = "longitud";
$tdatapedidos[".importFields"][] = "delivery";
$tdatapedidos[".importFields"][] = "total";
$tdatapedidos[".importFields"][] = "estado_id";
$tdatapedidos[".importFields"][] = "plataforma";
$tdatapedidos[".importFields"][] = "observacion";
$tdatapedidos[".importFields"][] = "user_id";

$tdatapedidos[".printFields"] = array();
$tdatapedidos[".printFields"][] = "fecha";
$tdatapedidos[".printFields"][] = "latitud";
$tdatapedidos[".printFields"][] = "longitud";
$tdatapedidos[".printFields"][] = "delivery";
$tdatapedidos[".printFields"][] = "total";
$tdatapedidos[".printFields"][] = "estado_id";
$tdatapedidos[".printFields"][] = "plataforma";
$tdatapedidos[".printFields"][] = "observacion";
$tdatapedidos[".printFields"][] = "user_id";


//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("pedidos","id");
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








	$tdatapedidos["id"] = $fdata;
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("pedidos","fecha");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha";

	
	
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




	$tdatapedidos["fecha"] = $fdata;
//	latitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "latitud";
	$fdata["GoodName"] = "latitud";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("pedidos","latitud");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "latitud";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "latitud";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
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




	$tdatapedidos["latitud"] = $fdata;
//	longitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "longitud";
	$fdata["GoodName"] = "longitud";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("pedidos","longitud");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "longitud";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "longitud";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
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




	$tdatapedidos["longitud"] = $fdata;
//	delivery
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "delivery";
	$fdata["GoodName"] = "delivery";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("pedidos","delivery");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "delivery";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "delivery";

	
	
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




	$tdatapedidos["delivery"] = $fdata;
//	total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "total";
	$fdata["GoodName"] = "total";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("pedidos","total");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "total";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total";

	
	
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




	$tdatapedidos["total"] = $fdata;
//	estado_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "estado_id";
	$fdata["GoodName"] = "estado_id";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("pedidos","estado_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "estado_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado_id";

	
	
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
	$edata["LookupTable"] = "estados";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "descripcion";
	
	

	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapedidos["estado_id"] = $fdata;
//	plataforma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "plataforma";
	$fdata["GoodName"] = "plataforma";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("pedidos","plataforma");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "plataforma";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "plataforma";

	
	
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




	$tdatapedidos["plataforma"] = $fdata;
//	observacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "observacion";
	$fdata["GoodName"] = "observacion";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("pedidos","observacion");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "observacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "observacion";

	
	
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




	$tdatapedidos["observacion"] = $fdata;
//	empresa_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "empresa_id";
	$fdata["GoodName"] = "empresa_id";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("pedidos","empresa_id");
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








	$tdatapedidos["empresa_id"] = $fdata;
//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("pedidos","user_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_id";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapedidos["user_id"] = $fdata;
//	creado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "creado_por";
	$fdata["GoodName"] = "creado_por";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("pedidos","creado_por");
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








	$tdatapedidos["creado_por"] = $fdata;
//	actualizado_por
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "actualizado_por";
	$fdata["GoodName"] = "actualizado_por";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("pedidos","actualizado_por");
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








	$tdatapedidos["actualizado_por"] = $fdata;
//	creado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "creado";
	$fdata["GoodName"] = "creado";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("pedidos","creado");
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








	$tdatapedidos["creado"] = $fdata;
//	actualizado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "actualizado";
	$fdata["GoodName"] = "actualizado";
	$fdata["ownerTable"] = "pedidos";
	$fdata["Label"] = GetFieldLabel("pedidos","actualizado");
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








	$tdatapedidos["actualizado"] = $fdata;


$tables_data["pedidos"]=&$tdatapedidos;
$field_labels["pedidos"] = &$fieldLabelspedidos;
$fieldToolTips["pedidos"] = &$fieldToolTipspedidos;
$placeHolders["pedidos"] = &$placeHolderspedidos;
$page_titles["pedidos"] = &$pageTitlespedidos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pedidos"] = array();
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
		
	$detailsTablesData["pedidos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["pedidos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pedidos"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["pedidos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pedidos"][$dIndex]["detailKeys"][]="pedido_id";

// tables which are master tables for current table (detail)
$masterTablesData["pedidos"] = array();


	
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
					$masterTablesData["pedidos"][0] = $masterParams;
				$masterTablesData["pedidos"][0]["masterKeys"] = array();
	$masterTablesData["pedidos"][0]["masterKeys"][]="id";
				$masterTablesData["pedidos"][0]["detailKeys"] = array();
	$masterTablesData["pedidos"][0]["detailKeys"][]="empresa_id";
		
	
				$strOriginalDetailsTable="estados";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="estados";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "estados";
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
					$masterTablesData["pedidos"][1] = $masterParams;
				$masterTablesData["pedidos"][1]["masterKeys"] = array();
	$masterTablesData["pedidos"][1]["masterKeys"][]="id";
				$masterTablesData["pedidos"][1]["detailKeys"] = array();
	$masterTablesData["pedidos"][1]["detailKeys"][]="estado_id";
		
	
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
					$masterTablesData["pedidos"][2] = $masterParams;
				$masterTablesData["pedidos"][2]["masterKeys"] = array();
	$masterTablesData["pedidos"][2]["masterKeys"][]="id";
				$masterTablesData["pedidos"][2]["detailKeys"] = array();
	$masterTablesData["pedidos"][2]["detailKeys"][]="actualizado_por";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pedidos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	fecha,  	latitud,  	longitud,  	delivery,  	total,  	estado_id,  	plataforma,  	observacion,  	empresa_id,  	user_id,  	creado_por,  	actualizado_por,  	creado,  	actualizado";
$proto0["m_strFrom"] = "FROM pedidos";
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
	"m_strTable" => "pedidos",
	"m_srcTableName" => "pedidos"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "pedidos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "pedidos"
));

$proto8["m_sql"] = "fecha";
$proto8["m_srcTableName"] = "pedidos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "latitud",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "pedidos"
));

$proto10["m_sql"] = "latitud";
$proto10["m_srcTableName"] = "pedidos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "longitud",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "pedidos"
));

$proto12["m_sql"] = "longitud";
$proto12["m_srcTableName"] = "pedidos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "delivery",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "pedidos"
));

$proto14["m_sql"] = "delivery";
$proto14["m_srcTableName"] = "pedidos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "total",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "pedidos"
));

$proto16["m_sql"] = "total";
$proto16["m_srcTableName"] = "pedidos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_id",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "pedidos"
));

$proto18["m_sql"] = "estado_id";
$proto18["m_srcTableName"] = "pedidos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "plataforma",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "pedidos"
));

$proto20["m_sql"] = "plataforma";
$proto20["m_srcTableName"] = "pedidos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "observacion",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "pedidos"
));

$proto22["m_sql"] = "observacion";
$proto22["m_srcTableName"] = "pedidos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "empresa_id",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "pedidos"
));

$proto24["m_sql"] = "empresa_id";
$proto24["m_srcTableName"] = "pedidos";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "user_id",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "pedidos"
));

$proto26["m_sql"] = "user_id";
$proto26["m_srcTableName"] = "pedidos";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "creado_por",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "pedidos"
));

$proto28["m_sql"] = "creado_por";
$proto28["m_srcTableName"] = "pedidos";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado_por",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "pedidos"
));

$proto30["m_sql"] = "actualizado_por";
$proto30["m_srcTableName"] = "pedidos";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "creado",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "pedidos"
));

$proto32["m_sql"] = "creado";
$proto32["m_srcTableName"] = "pedidos";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "actualizado",
	"m_strTable" => "pedidos",
	"m_srcTableName" => "pedidos"
));

$proto34["m_sql"] = "actualizado";
$proto34["m_srcTableName"] = "pedidos";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "pedidos";
$proto37["m_srcTableName"] = "pedidos";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "id";
$proto37["m_columns"][] = "fecha";
$proto37["m_columns"][] = "latitud";
$proto37["m_columns"][] = "longitud";
$proto37["m_columns"][] = "delivery";
$proto37["m_columns"][] = "total";
$proto37["m_columns"][] = "estado_id";
$proto37["m_columns"][] = "plataforma";
$proto37["m_columns"][] = "observacion";
$proto37["m_columns"][] = "empresa_id";
$proto37["m_columns"][] = "user_id";
$proto37["m_columns"][] = "creado_por";
$proto37["m_columns"][] = "actualizado_por";
$proto37["m_columns"][] = "creado";
$proto37["m_columns"][] = "actualizado";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "pedidos";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "pedidos";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pedidos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pedidos = createSqlQuery_pedidos();


	
		;

															

$tdatapedidos[".sqlquery"] = $queryData_pedidos;

$tableEvents["pedidos"] = new eventsBase;
$tdatapedidos[".hasEvents"] = false;

?>