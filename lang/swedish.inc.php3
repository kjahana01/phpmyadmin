<?php
/* $Id$ */

$charset = 'iso-8859-1';
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ' ';
$number_decimal_separator = ',';
$byteUnits = array('bytes', 'kB', 'MB', 'GB');

$day_of_week = array('S�n', 'M�n', 'Tis', 'Ons', 'Tors', 'Fre', 'L�r');
$month = array('januari', 'februari', 'mars', 'april', 'maj', 'juni', 'juli', 'augusti', 'september', 'oktober', 'november', 'december');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%e %B %Y kl %H:%M';

$strAccessDenied = '�tkomst nekad';
$strAction = '�tg�rd';
$strAddDeleteColumn = 'L�gg till/ta bort f�ltkolumner';
$strAddDeleteRow = 'L�gg till/ta bort villkorsrader';
$strAddNewField = 'L�gg till f�lt';
$strAddPriv = 'L�gg till ett nytt privilegium';
$strAddPrivMessage = 'Du har lagt till ett nytt privilegium.';
$strAddSearchConditions = 'L�gg till s�kvillkor (uttryck i "where"-sats):';
$strAddToIndex = 'L�gg till&nbsp;%s&nbsp;kolumn(er) till index';
$strAddUser = 'L�gg till ny anv�ndare';
$strAddUserMessage = 'Du har lagt till en ny anv�ndare.';
$strAffectedRows = 'P�verkade rader:';
$strAfter = 'Efter %s';
$strAfterInsertBack = 'Tillbaka';
$strAfterInsertNewInsert = 'L�gg till en ny rad';
$strAll = 'Alla';
$strAlterOrderBy = 'Sortera om tabellen efter';
$strAnIndex = 'Ett index har lagts till f�r %s';
$strAnalyzeTable = 'Analysera tabell';
$strAnd = 'Och';
$strAny = 'Vem som helst';
$strAnyColumn = 'Vilken kolumn som helst';
$strAnyDatabase = 'Vilken databas som helst';
$strAnyHost = 'Vilken v�rd som helst';
$strAnyTable = 'Vilken tabell som helst';
$strAnyUser = 'Vilken anv�ndare som helst';
$strAPrimaryKey = 'En prim�r nyckel har lagts till f�r %s';
$strAscending = 'Stigande';
$strAtBeginningOfTable = 'I b�rjan av tabellen';
$strAtEndOfTable = 'I slutet av tabellen';
$strAttr = 'Attribut';

$strBack = 'Bak�t';
$strBinary = 'Bin�r';
$strBinaryDoNotEdit = 'Bin�r - �ndra inte';
$strBookmarkDeleted = 'Bokm�rket har raderats.';
$strBookmarkLabel = 'Etikett';
$strBookmarkQuery = 'Bokm�rkt SQL-fr�ga';
$strBookmarkThis = 'Skapa bokm�rke f�r den h�r SQL-fr�gan';
$strBookmarkView = 'Visa endast';
$strBrowse = 'Visa';
$strBzip = '"bzippad"';

$strCantLoadMySQL = 'kan inte ladda MySQL-till�gg,<br />var god och kontrollera PHP-konfigurationen.';
$strCantLoadRecodeIconv = 'Kan inte ladda ut�kningarna iconv eller recode som beh�vs f�r teckenupps�ttningsomvandling. Konfigurera php f�r att till�ta dessa ut�kningar eller st�ng av teckenupps�ttningsomvandling i phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Kan inte byta namn p� index till "PRIMARY"!';
$strCantUseRecodeIconv = 'Kan inte anv�nda funktionerna iconv, libiconv eller recode_string n�r ut�kade rapporter ska laddas. Kontrollera din php-konfiguration.';
$strCardinality = 'Kardinalitet';
$strCarriage = 'Vagnretur: \\r';
$strChange = '�ndra';
$strChangeDisplay = 'V�lj f�lt som ska visas';
$strChangePassword = 'Byt l�senord';
$strCheckAll = 'Markera alla';
$strCheckDbPriv = 'Kontrollera databasprivilegier';
$strCheckTable = 'Kontrollera tabell';
$strChoosePage = 'V�lj en sida att redigera';
$strColumn = 'Kolumn';
$strColumnNames = 'Kolumn-namn';
$strComments = 'Kommentarer';
$strCompleteInserts = 'Kompletta infogningar';
$strConfigFileError = 'phpMyAdmin kunde inte l�sa din konfigurationsfil!<br />Detta kan intr�ffa om php hittar ett fel i den eller om php inte hittar filen.<br />Anropa konfigurationsfilen direkt mha l�nken nedan och l�s php:s felmeddelande(n) som du erh�ller. I de flesta fall saknas ett citationstecken eller ett semikolon n�gonstans.<br />Om du erh�ller en tom sida �r allt bra.';
$strConfigureTableCoord = 'Var god ange koordinaterna f�r tabellen %s';
$strConfirm = 'Vill du verkligen g�ra det?';
$strCookiesRequired = 'Kakor (cookies) m�ste till�tas f�r att g� vidare.';
$strCopyTable = 'Kopiera tabellen till (databas<b>.</b>tabell):';
$strCopyTableOK = 'Tabellen %s har kopierats till %s.';
$strCreate = 'Skapa';
$strCreateIndex = 'Skapa ett index f�r&nbsp;%s&nbsp;kolumn(er)';
$strCreateIndexTopic = 'Skapa ett nytt index';
$strCreateNewDatabase = 'Skapa ny databas';
$strCreateNewTable = 'Skapa ny tabell i databas %s';
$strCreatePage = 'Skapa en ny sida';
$strCriteria = 'Villkor';

$strData = 'Data';
$strDataOnly = 'Enbart data';
$strDatabase = 'Databas ';
$strDatabaseHasBeenDropped = 'Databasen %s har tagits bort.';
$strDatabaseWildcard = 'Databas (jokertecken till�tna):';
$strDatabases = 'databaser';
$strDatabasesStats = 'Databas-statistik';
$strDefault = 'Standard';
$strDelete = 'Radera';
$strDeleteFailed = 'Raderingen misslyckades!';
$strDeleteUserMessage = 'Du har tagit bort anv�ndaren %s.';
$strDeleted = 'Raden har raderats';
$strDeletedRows = 'Raderade rader';
$strDescending = 'Fallande';
$strDisplay = 'Visa';
$strDisplayOrder = 'Visningsordning:';
$strDisplayPDF = 'Visa PDF-schema';
$strDoAQuery = 'Utf�r en "Query by Example" (jokertecken: "%")';
$strDoYouReally = 'Vill du verkligen ';
$strDocu = 'Dokumentation';
$strDrop = 'Radera';
$strDropDB = 'Radera databas %s';
$strDropTable = 'Radera tabell';
$strDumpXRows = 'Visa %s rader med b�rjan p� rad %s.';
$strDumpingData = 'Data i tabell';
$strDynamic = 'dynamisk';

$strEdit = '�ndra';
$strEditPDFPages = 'Redigera PDF-sidor';
$strEditPrivileges = '�ndra privilegier';
$strEffective = 'Effektivt';
$strEmpty = 'T�m';
$strEmptyResultSet = 'MySQL skickade tillbaka ett tomt resultat (dvs inga rader).';
$strEnd = 'Slutet';
$strEnglishPrivileges = ' Obs! MySQL-privilegiumnamn anges p� engelska ';
$strError = 'Fel';
$strExplain = 'F�rklara SQL-kod';
$strExport = 'Exportera';
$strExportToXML = 'Exportera till XML-format';
$strExtendedInserts = 'Ut�kade infogningar';
$strExtra = 'Extra';

$strField = 'F�lt';
$strFieldHasBeenDropped = 'F�ltet %s har tagits bort';
$strFields = 'F�lt';
$strFieldsEmpty = ' Antalet f�lt �r noll! ';
$strFieldsEnclosedBy = 'F�lten omges av';
$strFieldsEscapedBy = 'Specialtecken i f�lt f�reg�s av';
$strFieldsTerminatedBy = 'F�lten avslutas med';
$strFixed = 'fast';
$strFlushTable = 'Rensa tabellen ("FLUSH TABLE")';
$strFormEmpty = 'V�rde saknas i formul�ret!';
$strFormat = 'Format';
$strFullText = 'Fullst�ndiga texter';
$strFunction = 'Funktion';

$strGenBy = 'Genererad av';
$strGenTime = 'Skapad';
$strGo = 'K�r';
$strGrants = 'Befogenheter';
$strGzip = '"gzippad"';

$strHasBeenAltered = 'har �ndrats.';
$strHasBeenCreated = 'har skapats.';
$strHaveToShow = 'Du m�ste v�lja minst en kolumn som ska visas';
$strHome = 'Hem';
$strHomepageOfficial = 'phpMyAdmin:s officiella hemsida';
$strHomepageSourceforge = 'phpMyAdmin Sourceforge-nedladdningssida';
$strHost = 'V�rd';
$strHostEmpty = 'V�rdnamnet �r tomt!';

$strIdxFulltext = 'Heltext';
$strIfYouWish = 'Om du vill ladda enbart n�gra av tabellens kolumner, ange en kommaseparerad f�ltlista.';
$strIgnore = 'Ignorera';
$strInUse = 'anv�nds';
$strIndex = 'Index';
$strIndexHasBeenDropped = 'Index %s har tagits bort';
$strIndexName = 'Indexnamn&nbsp;:';
$strIndexType = 'Indextyp&nbsp;:';
$strIndexes = 'Index';
$strInsert = 'L�gg till';
$strInsertAsNewRow = 'L�gg till som ny rad';
$strInsertNewRow = 'L�gg till ny rad';
$strInsertTextfiles = 'Importera textfil till tabellen';
$strInsertedRows = 'Tillagda rader:';
$strInstructions = 'Instruktioner';
$strInvalidName = '"%s" �r ett reserverat ord, du kan inte anv�nda det som ett namn p� en databas/tabell/f�lt.';

$strKeepPass = '�ndra inte l�senordet';
$strKeyname = 'Nyckel';;
$strKill = 'D�da';

$strLength = 'L�ngd';
$strLengthSet = 'L�ngd/V�rden*';
$strLimitNumRows = 'Rader per sida';
$strLineFeed = 'Radframmatning: \\n';
$strLines = 'Rader';
$strLinesTerminatedBy = 'Raderna avslutas med';
$strLinkNotFound = 'L�nk ej funnen';
$strLinksTo = 'L�nkar till';
$strLocationTextfile = 'Textfilens plats';
$strLogPassword = 'L�senord:';
$strLogUsername = 'Anv�ndarnamn:';
$strLogin = 'Logga in';
$strLogout = 'Logga ut';

$strMissingBracket = 'Parantes saknas';
$strModifications = '�ndringarna har sparats';
$strModify = '�ndra';
$strModifyIndexTopic = '�ndra ett index';
$strMoveTable = 'Flytta tabellen till (databas<b>.</b>tabell):';
$strMoveTableOK = 'Tabellen %s har flyttats till %s.';
$strMySQLCharset = 'MySQL teckenupps�ttning';
$strMySQLReloaded = 'MySQL har startats om.';
$strMySQLSaid = 'MySQL sa: ';
$strMySQLServerProcess = 'MySQL %pma_s1% k�rs p� %pma_s2% som %pma_s3%';
$strMySQLShowProcess = 'Visa processer';
$strMySQLShowStatus = 'Visa MySQL-k�rningsinformation';
$strMySQLShowVars = 'Visa MySQL:s systemvariabler';

$strName = 'Namn';
$strNext = 'N�sta';
$strNo = 'Nej';
$strNoDatabases = 'Inga databaser';
$strNoDescription = 'Ingen beskrivning';
$strNoDropDatabases = '"DROP DATABASE"-instruktioner �r avst�ngda.';
$strNoFrames = 'phpMyAdmin fungerar tyv�rr endast med webbl�sare som hanterar ramar.';
$strNoIndex = 'Inga index �r definierade!';
$strNoIndexPartsDefined = 'Inga delar av index �r definierade!';
$strNoModification = 'Ingen f�r�ndring';
$strNoPassword = 'Inget l�senord';
$strNoPhp = 'Utan PHP-kod';
$strNoPrivileges = 'Inga privilegier';
$strNoQuery = 'Ingen SQL-fr�ga!';
$strNoRights = 'Du har inte tillr�cklig beh�righet f�r att vara h�r!';
$strNoTablesFound = 'Inga tabeller funna i databasen.';
$strNoUsersFound = 'Hittade ingen anv�ndare.';
$strNone = 'Inget';
$strNotNumber = 'Det �r inte ett nummer!';
$strNotSet = '<b>%s</b>-tabellen ej funnen eller ej angiven i %s';
$strNotValidNumber = ' �r inte ett giltigt radnummer!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s tr�ff(ar) i tabell <i>%s</i>';
$strNumSearchResultsTotal = '<b>Totalt:</b> <i>%s</i> tr�ff(ar)';

$strOftenQuotation = 'Ofta citattecken. Frivilligt betyder att bara \'char\' och \'varchar\' f�lten omgivs av det angivna tecken.';
$strOperations = 'Operationer';
$strOptimizeTable = 'Optimera tabell';
$strOptionalControls = 'Frivilligt. Styr hur l�sning och skrivning av specialtecken utf�rs.';
$strOptionally = 'Frivilligt';
$strOptions = 'Alternativ';
$strOr = 'Eller';
$strOverhead = 'Outnyttjat';

$strPHPVersion = 'PHP-version';
$strPageNumber = 'Sida:';
$strPartialText = 'Avkortade texter';
$strPassword = 'L�senord';
$strPasswordEmpty = 'L�senordet �r tomt!';
$strPasswordNotSame = 'L�senorden �r inte lika!';
$strPdfDbSchema = 'Schema f�r databasen "%s" - Sidan %s';
$strPdfInvalidPageNum = 'Odefinierat PDF-sidnummer!';
$strPdfInvalidTblName = 'Tabellen "%s" finns inte!';
$strPhp = 'Skapa PHP-kod';
$strPmaDocumentation = 'phpMyAdmin dokumentation';
$strPmaUriError = 'Variabeln <tt>$cfg[\'PmaAbsoluteUri\']</tt> M�STE anges i din konfigurationsfil!';
$strPos1 = 'B�rjan';
$strPrevious = 'F�reg�ende';
$strPrimary = 'Prim�r';
$strPrimaryKey = 'Prim�rnyckel';
$strPrimaryKeyHasBeenDropped = 'Den prim�ra nyckeln har tagits bort';
$strPrimaryKeyName = 'Prim�rnyckelns namn m�ste vara "PRIMARY"!';
$strPrimaryKeyWarning = '("PRIMARY" <b>m�ste</b> vara namnet p� och <b>endast p�</b> en prim�rnyckel!)';
$strPrintView = 'Utskriftsv�nlig visning';
$strPrivileges = 'Privilegier';
$strProperties = 'Inst�llningar';

$strQBE = 'Skapa fr�ga mha formul�r (Query by Example)';
$strQBEDel = 'Ta bort';
$strQBEIns = 'Infoga';
$strQueryOnDb = 'SQL-fr�ga i databas <b>%s</b>:';

$strReType = 'Skriv om';
$strRecords = 'Rader';
$strReferentialIntegrity = 'Kontrollera referensintegritet:';
$strRelationView = 'Visa relationer';
$strReloadFailed = 'Omladdning av MySQL misslyckades.';
$strReloadMySQL = 'Ladda om MySQL';
$strRememberReload = 'Kom ih�g att ladda om MySQL.';
$strRenameTable = 'D�p om tabellen till';
$strRenameTableOK = 'Tabell %s har d�pts om till %s';
$strRepairTable = 'Reparera tabell';
$strReplace = 'Ers�tt';
$strReplaceTable = 'Ers�tt tabelldata med fil';
$strReset = 'Nollst�ll';
$strReType = 'Bekr�fta';
$strRevoke = 'Upph�v';
$strRevokeGrant = 'Upph�v Grant';
$strRevokeGrantMessage = 'Du har upph�vt Grant-privilegiet f�r %s';
$strRevokeMessage = 'Du har upph�vt privilegierna f�r %s';
$strRevokePriv = 'Upph�v privilegier';
$strRowLength = 'Radl�ngd';
$strRowSize = 'Radstorlek';
$strRows = 'Rader';
$strRowsFrom = 'rader med b�rjan fr�n';
$strRowsModeHorizontal= 'v�gr�tt';
$strRowsModeOptions= 'i %s format och upprepa rubrikerna efter %s celler';
$strRowsModeVertical= 'lodr�tt';
$strRowsStatistic = 'Radstatistik';
$strRunQuery = 'K�r fr�ga';
$strRunSQLQuery = 'K�r SQL-fr�ga/fr�gor i databasen %s';
$strRunning = 'k�rs p� %s';

$strSQL = 'SQL';
$strSQLQuery = 'SQL-fr�ga';
$strSQLResult = 'SQL-resultat';
$strSave = 'Spara';
$strScaleFactorSmall = 'Skalfaktorn �r f�r liten f�r att schemat ska f� plats p� en sida';
$strSearch = 'S�k';
$strSearchFormTitle = 'S�k i databas';
$strSearchInTables = 'I tabell(er):';
$strSearchNeedle = 'Ord eller v�rde(n) att s�ka efter (jokertecken: "%"):';
$strSearchOption1 = 'minst ett av orden';
$strSearchOption2 = 'alla ord';
$strSearchOption3 = 'den exakta frasen';
$strSearchOption4 = 'som regulj�rt uttryck';
$strSearchResultsFor = 'Resultat av s�kning efter "<i>%s</i>" %s:';
$strSearchType = 'Hitta:';
$strSelect = 'V�lj';
$strSelectADb = 'V�lj en databas';
$strSelectAll = 'Markera alla';
$strSelectFields = 'V�lj f�lt (minst ett):';
$strSelectNumRows = 'i fr�ga';
$strSelectTables = 'V�lj tabeller';
$strSend = 'Skicka';
$strServerChoice = 'Serverval';
$strServerVersion = 'Serverversion';
$strSetEnumVal = 'Om en f�lttyp �r "enum" eller "set", var god ange v�rden enligt f�ljande format: \'a\',\'b\',\'c\'...<br />Om du beh�ver l�gga till ett bak�tstreck ("\") eller ett enkelcitat ("\'") i v�rdena, skriv ett bak�tstreck f�re tecknet (till exempel \'\\\\xyz\' eller \'a\\\'b\').';
$strShow = 'Visa';
$strShowAll = 'Visa alla';
$strShowColor = 'Visa f�rger';
$strShowCols = 'Visa kolumner';
$strShowGrid = 'Visa rutn�t';
$strShowPHPInfo = 'Visa PHP-information';
$strShowTableDimension = 'Visa tabellers dimensioner';
$strShowTables = 'Visa tabeller';
$strShowThisQuery = ' Visa den h�r fr�gan igen ';
$strShowingRecords = 'Visar rader ';
$strSingly = '(ensam)';
$strSize = 'Storlek';
$strSort = 'Sortering';
$strSpaceUsage = 'Utrymmesanv�ndning';
$strSplitWordsWithSpace = 'Ord separeras med mellanslag (" ").';
$strStatement = 'Uppgift';
$strStrucCSV = 'CSV-data';
$strStrucData = 'Struktur och data';
$strStrucDrop = 'L�gg till \'radera tabell\'';
$strStrucExcelCSV = 'CSV f�r MS Excel-data';
$strStrucOnly = 'Enbart struktur';
$strStructPropose = 'F�resl� tabellstruktur';
$strStructure = 'Struktur';
$strSubmit = 'S�nd';
$strSuccess = 'Din SQL-fr�ga utf�rdes korrekt';
$strSum = 'Summa';

$strTable = 'tabell ';
$strTableComments = 'Tabellkommentarer';
$strTableEmpty = 'Tabellnamnet �r tomt!';
$strTableHasBeenDropped = 'Tabellen %s har tagits bort';
$strTableHasBeenEmptied = 'Tabellen %s har t�mts';
$strTableHasBeenFlushed = 'Tabellen %s har rengjorts';
$strTableMaintenance = 'Tabellunderh�ll';
$strTableStructure = 'Struktur f�r tabell';
$strTableType = 'Tabelltyp';
$strTables = '%s tabell(er)';
$strTextAreaLength = ' P� grund av dess l�ngd,<br /> kanske detta f�lt inte kan redigeras ';
$strTheContent = 'Filens inneh�ll har importerats.';
$strTheContents = 'Filens inneh�ll ers�tter den valda tabellens rader som har identiska prim�ra eller unika nycklar.';
$strTheTerminator = 'F�ltavslutare.';
$strTotal = 'totalt';
$strType = 'Typ';

$strUncheckAll = 'Avmarkera alla';
$strUnique = 'Unik';
$strUnselectAll = 'Avmarkera alla';
$strUpdatePrivMessage = 'Du har uppdaterat privilegierna f�r %s.';
$strUpdateProfile = 'Uppdatera profil:';
$strUpdateProfileMessage = 'Profilen har uppdaterats.';
$strUpdateQuery = 'Uppdatera fr�ga';
$strUsage = 'Anv�ndning';
$strUseBackquotes = 'Anv�nd bak�tcitat runt tabell- och f�ltnamn';
$strUseTables = 'Anv�nd tabeller';
$strUser = 'Anv�ndare';
$strUserEmpty = 'Anv�ndarnamnet �r tomt!';
$strUserName = 'Anv�ndarnamn';
$strUsers = 'Anv�ndare';

$strValue = 'V�rde';
$strViewDump = 'Visa SQL-satser f�r tabellen';
$strViewDumpDB = 'Visa SQL-satser f�r databasen';

$strWelcome = 'V�lkommen till %s';
$strWithChecked = 'Med markerade:';
$strWrongUser = 'Fel anv�ndarnamn/l�senord. �tkomst nekad.';

$strYes = 'Ja';

$strZip = '"zippad"';

// To translate

?>
