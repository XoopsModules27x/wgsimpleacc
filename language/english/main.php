<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * wgSimpleAcc module for xoops
 *
 * @copyright      2020 XOOPS Project (https://xooops.org)
 * @license        GPL 2.0 or later
 * @package        wgsimpleacc
 * @author         Goffy - XOOPS Development Team - Email:<webmaster@wedega.com> - Website:<https://xoops.wedega.com>
 */

require_once __DIR__ . '/admin.php';

// ---------------- Main ----------------
\define('_MD_WGSIMPLEACC_INDEX', 'Overview');
\define('_MD_WGSIMPLEACC_TITLE', 'wgSimpleAcc');
\define('_MD_WGSIMPLEACC_DESC', 'The wgSimpleAcc is a XOOPS module to record an income / expense account for clubs or small businesses');
\define('_MD_WGSIMPLEACC_INDEX_DESC', 'Welcome to the homepage of your new module wgSimpleAcc!');
\define('_MD_WGSIMPLEACC_NO_PDF_LIBRARY', 'Libraries TCPDF not there yet, upload them in root/Frameworks');
\define('_MD_WGSIMPLEACC_NO', 'No');
\define('_MD_WGSIMPLEACC_DETAILS', 'Show details');
\define('_MD_WGSIMPLEACC_REFRESH', 'Refresh');
\define('_MD_WGSIMPLEACC_DATECREATED', 'Date created');
\define('_MD_WGSIMPLEACC_SUBMITTER', 'Submitter');
\define('_MD_WGSIMPLEACC_LIST_CHILDS', 'Click to show/hide sub categories');
\define('_MD_WGSIMPLEACC_APPROVE', 'Approve');
\define('_MD_WGSIMPLEACC_DASHBOARD', 'Dashboard');
\define('_MD_WGSIMPLEACC_DOWNLOAD', 'Download');
\define('_MD_WGSIMPLEACC_REACTIVATE', 'Reactivate (add transaction to list of valid transactions again');
\define('_MD_WGSIMPLEACC_SUMS', 'Sums');
\define('_MD_WGSIMPLEACC_FORM_PLACEHOLDER_NAME', 'Enter name');
\define('_MD_WGSIMPLEACC_INVALID_PARAM', 'Invalid parameter');
\define('_MD_WGSIMPLEACC_COLLAPSE_ALL', 'Collapse all');
\define('_MD_WGSIMPLEACC_LIMIT', 'Number of lines');
\define('_MD_WGSIMPLEACC_MISSING_ID', 'Missing Id');
// ---------------- Filter   ----------------
\define('_MD_WGSIMPLEACC_FILTERTYPE', 'Filter');
\define('_MD_WGSIMPLEACC_SHOW_ALL', 'Show all');
\define('_MD_WGSIMPLEACC_SHOW_CUSTOM', 'Show custom selection');
\define('_MD_WGSIMPLEACC_SHOW_TOP', 'Show top levels');
\define('_MD_WGSIMPLEACC_SHOW_ONLINE', 'Show Online only');
\define('_MD_WGSIMPLEACC_FILTERBY_YEAR', 'Select year');
\define('_MD_WGSIMPLEACC_FILTERBY_ASSET', 'Select asset');
\define('_MD_WGSIMPLEACC_FILTERBY_ALLOC', 'Select allocation');
\define('_MD_WGSIMPLEACC_FILTERBY_ALLOCSUB', 'Include all sub allocations');
\define('_MD_WGSIMPLEACC_FILTERBY_ACCOUNT', 'Select account');
\define('_MD_WGSIMPLEACC_FILTERBY_PERIOD', 'Select period (Value Date)');
\define('_MD_WGSIMPLEACC_FILTERBY_CLIENT', 'Select client');
\define('_MD_WGSIMPLEACC_FILTERBY_STATUS', 'Select status');
\define('_MD_WGSIMPLEACC_FILTERBY_DESC', 'Filter by description text (use % as wildcard for zero, one or multiple characters)');
\define('_MD_WGSIMPLEACC_FILTER_PERIODFROM', 'From');
\define('_MD_WGSIMPLEACC_FILTER_PERIODTO', 'To');
\define('_MD_WGSIMPLEACC_FILTER_APPLY', 'Apply Filter');
\define('_MD_WGSIMPLEACC_FILTER_SHOW', 'Show Filter');
\define('_MD_WGSIMPLEACC_FILTER_HIDE', 'Hide Filter');
\define('_MD_WGSIMPLEACC_FILTER_SHOWHIDE', 'Show/Hide Filter');
\define('_MD_WGSIMPLEACC_FILTER_OUTPUT', 'Output selected data');
\define('_MD_WGSIMPLEACC_FILTER_OUTPUTTYPE', 'Type of output');
\define('_MD_WGSIMPLEACC_FILTER_NO_TRANSACTIONS', "There aren't transactions corresponding the filter");
\define('_MD_WGSIMPLEACC_FILTER_SELECT_INVALID', 'Include invalid account/allocations in filter');
// ---------------- Contents ----------------
// There aren't
\define('_MD_WGSIMPLEACC_THEREARENT_ACCOUNTS', "There aren't accounts at the moment");
\define('_MD_WGSIMPLEACC_THEREARENT_TRANSACTIONS', "There aren't transactions at the moment");
\define('_MD_WGSIMPLEACC_THEREARENT_TRAHISTORIES', "There aren't transaction histories at the moment");
\define('_MD_WGSIMPLEACC_THEREARENT_ALLOCATIONS', "There aren't allocations at the moment");
\define('_MD_WGSIMPLEACC_THEREARENT_ASSETS', "There aren't assets at the moment");
\define('_MD_WGSIMPLEACC_THEREARENT_CURRENCIES', "There aren't currencies at the moment");
\define('_MD_WGSIMPLEACC_THEREARENT_TAXES', "There aren't taxes at the moment");
\define('_MD_WGSIMPLEACC_THEREARENT_FILES', "There aren't files at the moment");
\define('_MD_WGSIMPLEACC_THEREARENT_FILHISTORIES', "There aren't files histories at the moment");
\define('_MD_WGSIMPLEACC_THEREARENT_BALANCES', "There aren't balances at the moment");
\define('_MD_WGSIMPLEACC_THEREARENT_TRATEMPLATES', "There aren't transaction templates at the moment");
\define('_MD_WGSIMPLEACC_THEREARENT_OUTTEMPLATES', "There aren't output templates at the moment");
\define('_MD_WGSIMPLEACC_THEREARENT_CLIENTS', "There aren't clients at the moment");
// Account
\define('_MD_WGSIMPLEACC_ACCOUNT_ADD', 'Add Account');
\define('_MD_WGSIMPLEACC_ACCOUNT_EDIT', 'Edit Account');
\define('_MD_WGSIMPLEACC_ACCOUNT', 'Account');
\define('_MD_WGSIMPLEACC_ACCOUNTS', 'Accounts');
\define('_MD_WGSIMPLEACC_ACCOUNTS_TITLE', 'Accounts title');
\define('_MD_WGSIMPLEACC_ACCOUNTS_DESC', 'Accounts description');
\define('_MD_WGSIMPLEACC_ACCOUNTS_LIST', 'List of Accounts');
\define('_MD_WGSIMPLEACC_ACCOUNTS_TIMELINE', 'Development of accounts');
\define('_MD_WGSIMPLEACC_ACCOUNT_SUBMIT', 'Submit account');
\define('_MD_WGSIMPLEACC_ACCOUNTS_LINECHART', 'Development');
\define('_MD_WGSIMPLEACC_ACCOUNTS_BARCHART', 'Distribution');
\define('_MD_WGSIMPLEACC_ACCOUNT_CURRID', 'This account: %s');
// Caption of Account
\define('_MD_WGSIMPLEACC_ACCOUNT_ID', 'Id');
\define('_MD_WGSIMPLEACC_ACCOUNT_PID', 'Parent account');
\define('_MD_WGSIMPLEACC_ACCOUNT_KEY', 'Key');
\define('_MD_WGSIMPLEACC_ACCOUNT_NAME', 'Name');
\define('_MD_WGSIMPLEACC_ACCOUNT_DESC', 'Description');
\define('_MD_WGSIMPLEACC_ACCOUNT_CLASSIFICATION', 'Classification');
\define('_MD_WGSIMPLEACC_ACCOUNT_COLOR', 'Color');
\define('_MD_WGSIMPLEACC_ACCOUNT_ONLINE', 'Online');
\define('_MD_WGSIMPLEACC_ACCOUNT_SORT', 'Sort');
\define('_MD_WGSIMPLEACC_ACCOUNT_LEVEL', 'Level');
\define('_MD_WGSIMPLEACC_ACCOUNT_WEIGHT', 'Weight');
\define('_MD_WGSIMPLEACC_ACCOUNT_IECALC', 'Use in income/expenses calculation');
\define('_MD_WGSIMPLEACC_ACCOUNT_ERR_DELETE1', 'Deleting account not possible!<br>Account already used for transactions!<br>Please change these transactions first');
\define('_MD_WGSIMPLEACC_ACCOUNT_ERR_DELETE2', 'Deleting account not possible!<br>Account has sub accounts!<br>Please delete/move sub accounts first');
// Transaction add/edit
\define('_MD_WGSIMPLEACC_TRANSACTION_ADD', 'Add transaction');
\define('_MD_WGSIMPLEACC_TRANSACTION_ADD_INCOME', 'Add transaction for income');
\define('_MD_WGSIMPLEACC_TRANSACTION_ADD_EXPENSES', 'Add transaction for expenses');
\define('_MD_WGSIMPLEACC_TRANSACTION_EDIT', 'Edit Transaction');
\define('_MD_WGSIMPLEACC_TRANSACTION_EDIT_INCOME', 'Edit transaction for income');
\define('_MD_WGSIMPLEACC_TRANSACTION_EDIT_EXPENSES', 'Edit transaction for expenses');
\define('_MD_WGSIMPLEACC_TRANSACTION_STATUS_WAITING', 'Waiting for approval');
\define('_MD_WGSIMPLEACC_TRANSACTION_DETAILS', 'Details for transaction');
// Transaction
\define('_MD_WGSIMPLEACC_TRANSACTION', 'Transaction');
\define('_MD_WGSIMPLEACC_TRANSACTIONS', 'Transactions');
\define('_MD_WGSIMPLEACC_TRANSACTIONS_TITLE', 'Transactions title');
\define('_MD_WGSIMPLEACC_TRANSACTIONS_DESC', 'Transactions description');
\define('_MD_WGSIMPLEACC_TRANSACTIONS_LIST', 'List of Transactions');
\define('_MD_WGSIMPLEACC_TRANSACTIONS_OVERVIEW', 'Overview of Transactions');
\define('_MD_WGSIMPLEACC_TRANSACTIONS_INCOMES', 'Incomes');
\define('_MD_WGSIMPLEACC_TRANSACTIONS_EXPENSES', 'Expenses');
\define('_MD_WGSIMPLEACC_TRANSACTION_SUBMIT_INCOME', 'Submit income');
\define('_MD_WGSIMPLEACC_TRANSACTION_SUBMIT_EXPENSE', 'Submit expense');
\define('_MD_WGSIMPLEACC_TRANSACTION_TRATEMPLATE', 'Use as template');
\define('_MD_WGSIMPLEACC_TRANSACTION_SELECT_INVALID', "The current saved selection %s '%s' is not valid at the moment");
// Caption of Transaction
\define('_MD_WGSIMPLEACC_TRANSACTION_ID', 'Id');
\define('_MD_WGSIMPLEACC_TRANSACTION_YEAR', 'Year');
\define('_MD_WGSIMPLEACC_TRANSACTION_NB', 'Number');
\define('_MD_WGSIMPLEACC_TRANSACTION_YEARNB', 'Year/Number');
\define('_MD_WGSIMPLEACC_TRANSACTION_DESC', 'Description');
\define('_MD_WGSIMPLEACC_TRANSACTION_REFERENCE', 'Reference');
\define('_MD_WGSIMPLEACC_TRANSACTION_REMARKS', 'Remarks');
\define('_MD_WGSIMPLEACC_TRANSACTION_ACCID', 'Account');
\define('_MD_WGSIMPLEACC_TRANSACTION_ALLID', 'Allocation');
\define('_MD_WGSIMPLEACC_TRANSACTION_DATE', 'Value Date');
\define('_MD_WGSIMPLEACC_TRANSACTION_CURID', 'Currency');
\define('_MD_WGSIMPLEACC_TRANSACTION_AMOUNT', 'Amount');
\define('_MD_WGSIMPLEACC_TRANSACTION_AMOUNTIN', 'Amount income');
\define('_MD_WGSIMPLEACC_TRANSACTION_AMOUNTOUT', 'Amount expense');
\define('_MD_WGSIMPLEACC_TRANSACTION_TAXID', 'Tax rate');
\define('_MD_WGSIMPLEACC_TRANSACTION_ASID', 'Asset');
\define('_MD_WGSIMPLEACC_TRANSACTION_CLIID', 'Client');
\define('_MD_WGSIMPLEACC_TRANSACTION_STATUS', 'Status');
\define('_MD_WGSIMPLEACC_TRANSACTION_COMMENTS', 'Comments');
\define('_MD_WGSIMPLEACC_TRANSACTION_CLASS', 'Class');
\define('_MD_WGSIMPLEACC_TRANSACTION_FILES', 'Files');
\define('_MD_WGSIMPLEACC_TRANSACTION_BALID', 'Balance');
\define('_MD_WGSIMPLEACC_TRANSACTION_BALIDT', 'Temporary balance');
\define('_MD_WGSIMPLEACC_TRANSACTION_HIST', 'History');
\define('_MD_WGSIMPLEACC_TRANSACTION_TEMPLATE', 'Template');
// Allocation
\define('_MD_WGSIMPLEACC_ALLOCATION_ADD', 'Add Allocation');
\define('_MD_WGSIMPLEACC_ALLOCATION_EDIT', 'Edit Allocation');
\define('_MD_WGSIMPLEACC_ALLOCATION', 'Allocation');
\define('_MD_WGSIMPLEACC_ALLOCATIONS', 'Allocations');
\define('_MD_WGSIMPLEACC_ALLOCATIONS_TITLE', 'Allocations title');
\define('_MD_WGSIMPLEACC_ALLOCATIONS_DESC', 'Allocations description');
\define('_MD_WGSIMPLEACC_ALLOCATIONS_LIST', 'List of Allocations');
\define('_MD_WGSIMPLEACC_ALLOCATION_SUBMIT', 'Submit allocation');
\define('_MD_WGSIMPLEACC_ALLOCATION_SELECT', 'Select allocation');
\define('_MD_WGSIMPLEACC_ALLOCATIONS_BARCHART', 'Distribution per allocation');
// Caption of Allocation
\define('_MD_WGSIMPLEACC_ALLOCATION_ID', 'Id');
\define('_MD_WGSIMPLEACC_ALLOCATION_PID', 'Parent allocation');
\define('_MD_WGSIMPLEACC_ALLOCATION_NAME', 'Name');
\define('_MD_WGSIMPLEACC_ALLOCATION_DESC', 'Description');
\define('_MD_WGSIMPLEACC_ALLOCATION_ONLINE', 'Online');
\define('_MD_WGSIMPLEACC_ALLOCATION_ACCOUNTS', 'Accounts');
\define('_MD_WGSIMPLEACC_ALLOCATION_ACCOUNTS_DESC', 'Define all accounts, which should be used for this allocation.<br>Achtung: Das Konto muss für die Anzeige im Transaktionsformular zusätzlich noch auf "online" gesetzt sein.');
\define('_MD_WGSIMPLEACC_ALLOCATION_ACCOUNTS_COMPARE', 'Comparision Account Allocations');
\define('_MD_WGSIMPLEACC_ALLOCATION_SORT', 'Sort');
\define('_MD_WGSIMPLEACC_ALLOCATION_LEVEL', 'Level');
\define('_MD_WGSIMPLEACC_ALLOCATION_WEIGHT', 'Weight');
\define('_MD_WGSIMPLEACC_ALLOCATION_ERR_DELETE1', 'Deleting allocation not possible!<br>Allocation already used for transactions!<br>Please change these transactions first');
\define('_MD_WGSIMPLEACC_ALLOCATION_ERR_DELETE2', 'Deleting allocation not possible!<br>Allocation has sub allocations!<br>Please delete sub allocations first');
\define('_MD_WGSIMPLEACC_ALLOCATION_CURRID', 'Current allocation: %s');
// Asset
\define('_MD_WGSIMPLEACC_ASSET_ADD', 'Add Asset');
\define('_MD_WGSIMPLEACC_ASSET_EDIT', 'Edit Asset');
\define('_MD_WGSIMPLEACC_ASSET', 'Asset');
\define('_MD_WGSIMPLEACC_ASSETS', 'Assets');
\define('_MD_WGSIMPLEACC_ASSETS_TITLE', 'Assets title');
\define('_MD_WGSIMPLEACC_ASSETS_DESC', 'Assets description');
\define('_MD_WGSIMPLEACC_ASSETS_LIST', 'List of Assets');
\define('_MD_WGSIMPLEACC_ASSETS_OVERVIEW', 'Overview of Assets');
\define('_MD_WGSIMPLEACC_ASSETS_CURRENT', 'Current values of assets');
\define('_MD_WGSIMPLEACC_ASSETSTOTAL_CURRENT', 'Current values of assets in total');
\define('_MD_WGSIMPLEACC_ASSETS_TIMELINE', 'Development of assets');
\define('_MD_WGSIMPLEACC_ASSET_SUBMIT', 'Submit Asset');
// Caption of Asset
\define('_MD_WGSIMPLEACC_ASSET_ID', 'Id');
\define('_MD_WGSIMPLEACC_ASSET_NAME', 'Name');
\define('_MD_WGSIMPLEACC_ASSET_REFERENCE', 'Reference');
\define('_MD_WGSIMPLEACC_ASSET_DESCR', 'Description');
\define('_MD_WGSIMPLEACC_ASSET_COLOR', 'Color');
\define('_MD_WGSIMPLEACC_ASSET_IECALC', 'Use for income/expenses');
\define('_MD_WGSIMPLEACC_ASSET_IECALC_DESC', 'Use this assets for assigning to income or expenses');
\define('_MD_WGSIMPLEACC_ASSET_ONLINE', 'Online');
\define('_MD_WGSIMPLEACC_ASSET_BALANCE', 'Use for balances');
\define('_MD_WGSIMPLEACC_ASSET_PRIMARY', 'Primary');
\define('_MD_WGSIMPLEACC_ASSET_ERR_DELETE', 'Deleting asset not possible!<br>Assert is defined as primary!<br>Please define another asset as primary first');
//Charts
\define('_MD_WGSIMPLEACC_CHART_AMOUNT', 'Amount');
\define('_MD_WGSIMPLEACC_CHART_PERIOD', 'Period');
\define('_MD_WGSIMPLEACC_CHART_BALANCE', 'Balance');
\define('_MD_WGSIMPLEACC_CHART_TRAINEXSUMS', 'Sums of Transactions');
//Color
\define('_MD_WGSIMPLEACC_COLOR_LIGHTRED', 'Light Red');
\define('_MD_WGSIMPLEACC_COLOR_RED', 'Red');
\define('_MD_WGSIMPLEACC_COLOR_DARKRED', 'Dark red');
\define('_MD_WGSIMPLEACC_COLOR_LIGHTORANGE', 'Light Orange');
\define('_MD_WGSIMPLEACC_COLOR_ORANGE', 'Orange');
\define('_MD_WGSIMPLEACC_COLOR_DARKORANGE', 'Dark orange');
\define('_MD_WGSIMPLEACC_COLOR_LIGHTYELLOW', 'Light Yellow');
\define('_MD_WGSIMPLEACC_COLOR_YELLOW', 'Yellow');
\define('_MD_WGSIMPLEACC_COLOR_DARKYELLOW', 'Dark yellow');
\define('_MD_WGSIMPLEACC_COLOR_LIGHTGREEN', 'Light Green');
\define('_MD_WGSIMPLEACC_COLOR_GREEN', 'Green');
\define('_MD_WGSIMPLEACC_COLOR_DARKGREEN', 'Dark green');
\define('_MD_WGSIMPLEACC_COLOR_LIGHTBLUE', 'Light Blue');
\define('_MD_WGSIMPLEACC_COLOR_BLUE', 'Blue');
\define('_MD_WGSIMPLEACC_COLOR_DARKBLUE', 'Dark blue');
\define('_MD_WGSIMPLEACC_COLOR_LIGHTPURPLE', 'Light Purple');
\define('_MD_WGSIMPLEACC_COLOR_PURPLE', 'Purple');
\define('_MD_WGSIMPLEACC_COLOR_DARKPURPLE', 'Dark Purple');
\define('_MD_WGSIMPLEACC_COLOR_GREY', 'Grey');
\define('_MD_WGSIMPLEACC_COLOR_LIGHTBROWN', 'Light Brown');
\define('_MD_WGSIMPLEACC_COLOR_BROWN', 'Brown');
\define('_MD_WGSIMPLEACC_COLOR_DARKBROWN', 'Dark brown');
// File
\define('_MD_WGSIMPLEACC_FILE_ADD', 'Add File');
\define('_MD_WGSIMPLEACC_FILE_EDIT', 'Edit File');
\define('_MD_WGSIMPLEACC_FILE', 'File');
\define('_MD_WGSIMPLEACC_FILES', 'Files');
\define('_MD_WGSIMPLEACC_FILES_TITLE', 'Files title');
\define('_MD_WGSIMPLEACC_FILES_DESC', 'Files description');
\define('_MD_WGSIMPLEACC_FILES_LIST', 'List of Files');
\define('_MD_WGSIMPLEACC_FILES_LISTHEADER', 'Files of transaction: %t');
\define('_MD_WGSIMPLEACC_FILES_CURRENT', 'Current Files');
\define('_MD_WGSIMPLEACC_FILES_UPLOAD', 'Upload files');
\define('_MD_WGSIMPLEACC_FILES_UPLOAD_ERROR', 'Error upload files: invalid file name');
\define('_MD_WGSIMPLEACC_FILES_TEMP', 'Uploaded files');
\define('_MD_WGSIMPLEACC_FILES_TEMP_DESC', 'Uploaded files in folder: %f');
\define('_MD_WGSIMPLEACC_FILES_TEMP_DESC_NO', 'There are no uploaded files in folder: %f');
\define('_MD_WGSIMPLEACC_FILE_DETAILS', 'Details for file');
\define('_MD_WGSIMPLEACC_FILES_TEMP_DELETE', 'Delete shown file');
\define('_MD_WGSIMPLEACC_FILES_LIST_FILEDIR', 'List of files without linkage to a transaction');
\define('_MD_WGSIMPLEACC_FILE_NO_TRANSACTION', 'Files without linkage to a transaction');
// Caption of File
\define('_MD_WGSIMPLEACC_FILE_ID', 'Id');
\define('_MD_WGSIMPLEACC_FILE_TRAID', 'Transaction');
\define('_MD_WGSIMPLEACC_FILE_NAME', 'Name');
\define('_MD_WGSIMPLEACC_FILE_NAME_UPLOADS', 'Name in %s :');
\define('_MD_WGSIMPLEACC_FILE_TYPE', 'Type');
\define('_MD_WGSIMPLEACC_FILE_DESC', 'Description');
\define('_MD_WGSIMPLEACC_FILE_IP', 'IP-Address');
\define('_MD_WGSIMPLEACC_FILE_PREVIEW', 'Preview');
// Balance
\define('_MD_WGSIMPLEACC_BALANCE_ADD', 'Add Balance');
\define('_MD_WGSIMPLEACC_BALANCE_EDIT', 'Edit Balance');
\define('_MD_WGSIMPLEACC_BALANCE', 'Balance');
\define('_MD_WGSIMPLEACC_BALANCES', 'Balances');
\define('_MD_WGSIMPLEACC_BALANCES_TITLE', 'Balances title');
\define('_MD_WGSIMPLEACC_BALANCES_LIST', 'List of Balances');
\define('_MD_WGSIMPLEACC_BALANCE_SUBMIT', 'Create balance');
\define('_MD_WGSIMPLEACC_BALANCE_SUBMIT_FINAL', 'Create balance finally');
\define('_MD_WGSIMPLEACC_BALANCE_SUBMIT_TEMPORARY', 'Create temporary balance');
\define('_MD_WGSIMPLEACC_BALANCE_PRECALC', 'Pre-Calculate');
\define('_MD_WGSIMPLEACC_BALANCE_DELETE', 'Delete balance');
\define('_MD_WGSIMPLEACC_BALANCE_DELETE_FROMTO', 'Balance from %s to %s');
\define('_MD_WGSIMPLEACC_BALANCES_TIMELINE', 'Development of assets per balance');
\define('_MD_WGSIMPLEACC_BALANCE_DETAILS', 'Details of balance');
// Caption of Balance
\define('_MD_WGSIMPLEACC_BALANCE_ID', 'Id');
\define('_MD_WGSIMPLEACC_BALANCE_FROM', 'From');
\define('_MD_WGSIMPLEACC_BALANCE_TO', 'To');
\define('_MD_WGSIMPLEACC_BALANCE_ASID', 'Asset');
\define('_MD_WGSIMPLEACC_BALANCE_CURID', 'Currency');
\define('_MD_WGSIMPLEACC_BALANCE_AMOUNTSTART', 'Amount Start');
\define('_MD_WGSIMPLEACC_BALANCE_AMOUNTEND', 'Amount End');
\define('_MD_WGSIMPLEACC_BALANCE_DIFFERENCE', 'Difference');
\define('_MD_WGSIMPLEACC_BALANCE_STATUS', 'Status');
\define('_MD_WGSIMPLEACC_BALANCE_CALC_PERIOD', 'Calculated values for period from %f to %t');
\define('_MD_WGSIMPLEACC_BALANCE_DATE', 'Last date of asset');
\define('_MD_WGSIMPLEACC_BALANCE_VALUESTART', 'Value asset (at start)');
\define('_MD_WGSIMPLEACC_BALANCE_VALUEEND', 'Calculated value (at end)');
\define('_MD_WGSIMPLEACC_BALANCE_DATEUSED', "The 'date from' or 'date to' is within the period of another balance");
\define('_MD_WGSIMPLEACC_BALANCE_ERRORS', 'Balances were created, but errors occured');
\define('_MD_WGSIMPLEACC_BALANCE_TYPE', 'Balance type');
\define('_MD_WGSIMPLEACC_BALANCE_TYPE_TEMPORARY', 'Interim balance');
\define('_MD_WGSIMPLEACC_BALANCE_TYPE_FINAL', 'Final balance');
\define('_MD_WGSIMPLEACC_BALANCES_WARNING', 'Attention');
\define('_MD_WGSIMPLEACC_BALANCES_WARNING_NONE', 'In balance period there are %s transaktion(s) without status');
\define('_MD_WGSIMPLEACC_BALANCES_WARNING_CREATED', "In balance period there are %s transaktion(s) with status 'CREATED'");
\define('_MD_WGSIMPLEACC_BALANCES_WARNING_SUBMITTED', "In balance period there are %s transaktion(s) with status 'SUBMITTED'");
// Output balances
\define('_MD_WGSIMPLEACC_BALANCES_OUT_TOTAL', 'Total');
\define('_MD_WGSIMPLEACC_BALANCES_OUT_SUMS', 'Total');
\define('_MD_WGSIMPLEACC_BALANCES_OUT_SELECT', 'Select balances');
\define('_MD_WGSIMPLEACC_BALANCES_OUT_LEVEL', 'Select level of details');
\define('_MD_WGSIMPLEACC_BALANCES_OUT_LEVEL_SKIP', 'No output');
\define('_MD_WGSIMPLEACC_BALANCES_OUT_LEVEL_ALLOC', 'Level of allocations');
\define('_MD_WGSIMPLEACC_BALANCES_OUT_LEVEL_ALLOC1', 'Aggregate allocations on first level');
\define('_MD_WGSIMPLEACC_BALANCES_OUT_LEVEL_ALLOC2', 'Output detailed allocations');
\define('_MD_WGSIMPLEACC_BALANCES_OUT_LEVEL_ACC', 'Level of account');
\define('_MD_WGSIMPLEACC_BALANCES_OUT_LEVEL_ACC1', 'Aggregate all account');
\define('_MD_WGSIMPLEACC_BALANCES_OUT_LEVEL_ACC2', 'Aggregate accounts on first level');
// Templates general
\define('_MD_WGSIMPLEACC_TEMPLATES', 'Templates');
\define('_MD_WGSIMPLEACC_TEMPLATE_NONE', 'None');
// Tratemplates
\define('_MD_WGSIMPLEACC_TRATEMPLATE_ADD', 'Add Template');
\define('_MD_WGSIMPLEACC_TRATEMPLATE_EDIT', 'Edit Template');
\define('_MD_WGSIMPLEACC_TRATEMPLATES', 'Transaction templates');
\define('_MD_WGSIMPLEACC_TRATEMPLATES_LIST', 'List of Transaction Templates');
\define('_MD_WGSIMPLEACC_TRATEMPLATE_SUBMIT', 'Submit Transaction Template');
// Elements of Tratemplates
\define('_MD_WGSIMPLEACC_TRATEMPLATE_ID', 'Id');
\define('_MD_WGSIMPLEACC_TRATEMPLATE_NAME', 'Name');
\define('_MD_WGSIMPLEACC_TRATEMPLATE_DESC', 'Description');
\define('_MD_WGSIMPLEACC_TRATEMPLATE_ACCID', 'Accounts');
\define('_MD_WGSIMPLEACC_TRATEMPLATE_ALLID', 'Allocations');
\define('_MD_WGSIMPLEACC_TRATEMPLATE_ASID', 'Assets');
\define('_MD_WGSIMPLEACC_TRATEMPLATE_CLASS', 'Class');
\define('_MD_WGSIMPLEACC_TRATEMPLATE_AMOUNTIN', 'Amount in');
\define('_MD_WGSIMPLEACC_TRATEMPLATE_AMOUNTOUT', 'Amount out');
\define('_MD_WGSIMPLEACC_TRATEMPLATE_ONLINE', 'Online');
// Outtemplate
\define('_MD_WGSIMPLEACC_OUTTEMPLATE_ADD', 'Add Template');
\define('_MD_WGSIMPLEACC_OUTTEMPLATE_EDIT', 'Edit Template');
\define('_MD_WGSIMPLEACC_OUTTEMPLATE', 'Output template');
\define('_MD_WGSIMPLEACC_OUTTEMPLATES', 'Output templates');
\define('_MD_WGSIMPLEACC_OUTTEMPLATES_TITLE', 'Output templates title');
\define('_MD_WGSIMPLEACC_OUTTEMPLATES_LIST', 'List of Output templates');
\define('_MD_WGSIMPLEACC_OUTTEMPLATE_SUBMIT', 'Submit Output Template');
// Elements of Outtemplate
\define('_MD_WGSIMPLEACC_OUTTEMPLATE_ID', 'Id');
\define('_MD_WGSIMPLEACC_OUTTEMPLATE_NAME', 'Name');
\define('_MD_WGSIMPLEACC_OUTTEMPLATE_TYPE', 'Type');
\define('_MD_WGSIMPLEACC_OUTTEMPLATE_TYPE_READY', 'Ready to use');
\define('_MD_WGSIMPLEACC_OUTTEMPLATE_TYPE_BROWSER', 'Show in Browser');
\define('_MD_WGSIMPLEACC_OUTTEMPLATE_TYPE_FORM', 'Edit with form');
\define('_MD_WGSIMPLEACC_OUTTEMPLATE_TYPE_DESC', '- Ready to use: the template will be filled in and downloaded as pdf immediately<br>
- Show in Browser form: the data will be loaded and the output will be shown in your browser<br>
- Edit with form: the data will be loaded into a form and you can check result before output');
\define('_MD_WGSIMPLEACC_OUTTEMPLATE_HEADER', 'Page header');
\define('_MD_WGSIMPLEACC_OUTTEMPLATE_BODY', 'Content');
\define('_MD_WGSIMPLEACC_OUTTEMPLATE_FOOTER', 'Page footer');
\define('_MD_WGSIMPLEACC_OUTTEMPLATE_SMARTY', 'Smarty variables');
\define('_MD_WGSIMPLEACC_OUTTEMPLATE_SMARTY_DESC', '
    This module uses the Xoops <a href="http://www.smarty.net/">Smarty template engine</a> to render the output.
    <br><br>
    Available smarty-vars for transactions are:
    <ul>
    <li><{$sender}>: Default sender for output</li>
    <li><{$recipient}>: Recipient/Client</li>
    <li><{year}>: transaction registration year</li>
    <li><{nb}>: transaction registration year</li>
    <li><{$year_nb}>: Registration year/number of transaction (Format: YYYY/00000)</li>
    <li><{$desc}>: Description</li>
    <li><{$reference}>: Reference</li>
    <li><{$account}>: Account</li>
    <li><{$allocation}>: Allocation</li>
    <li><{$asset}>: Asset</li>
    <li><{$date}>: Transaction date</li>
    <li><{$amount}>: Amount</li>
    <li><{$status_text}>: Status</li>
    <li><{$datecreated}>: Date created</li>
    <li><{$submitter}>: Submitter</li>
    </ul>
    General smarty-vars are:
    <ul>
    <li><{$xoops_sitename}>: The website name</li>
    <li><{xoops_slogan}>: Slogan of website</li>
    <li><{$xoops_pagetitle}>: The page title</li>
    <li><{$xoops_url}>: The site main url (e.g. http://localhost/)</li>
    <li><{$output_date}>: Date output</li>
    <li><{$output_user}>: Current user name</li>
    </ul>');
\define('_MD_WGSIMPLEACC_OUTTEMPLATE_ALLID', 'Allocations');
\define('_MD_WGSIMPLEACC_OUTTEMPLATE_ACCID', 'Accounts');
\define('_MD_WGSIMPLEACC_OUTTEMPLATE_ALL', 'All');
\define('_MD_WGSIMPLEACC_OUTTEMPLATE_ONLINE', 'Online');
// Output Form
\define('_MD_WGSIMPLEACC_OUTTEMPLATE_FORM', 'Output Transaction');
\define('_MD_WGSIMPLEACC_OUTTEMPLATE_YEAR', 'Year');
\define('_MD_WGSIMPLEACC_OUTTEMPLATE_NB', 'Number');
\define('_MD_WGSIMPLEACC_OUTTEMPLATE_SENDER', 'Sender');
\define('_MD_WGSIMPLEACC_OUTTEMPLATE_RECIPIENT', 'Recipient');
\define('_MD_WGSIMPLEACC_OUTTEMPLATE_TARGET', 'Type of output');
\define('_MD_WGSIMPLEACC_OUTTEMPLATE_TARGET_BROWSER', 'Show only');
\define('_MD_WGSIMPLEACC_OUTTEMPLATE_TARGET_PDF', 'Output as PDF');
\define('_MD_WGSIMPLEACC_OUTTEMPLATE_PDF_SUCCESS', 'Output data as PDF successfully');
\define('_MD_WGSIMPLEACC_OUTTEMPLATE_AUTOADD', 'Add automatically');
\define('_MD_WGSIMPLEACC_OUTTEMPLATE_AUTOADD_DESC', 'Add created file automatically to the transaction');
// Client
\define('_MD_WGSIMPLEACC_CLIENTS', 'Clients');
\define('_MD_WGSIMPLEACC_CLIENTS_LIST', 'List of Clients');
\define('_MD_WGSIMPLEACC_CLIENTS_FILTERED', 'Clients (filtered)');
\define('_MD_WGSIMPLEACC_CLIENTS_FILTEREDNON', 'No clients found for this criteria');
\define('_MD_WGSIMPLEACC_CLIENT_SUBMIT', 'Send Client');
\define('_MD_WGSIMPLEACC_CLIENTS_SHOWALL', 'Show all Clients');
\define('_MD_WGSIMPLEACC_CLIENTS_NOTFOUND', " didn't match any client");
// Client add/edit
\define('_MD_WGSIMPLEACC_CLIENT_ADD', 'Add Client');
\define('_MD_WGSIMPLEACC_CLIENT_EDIT', 'Edit Client');
\define('_MD_WGSIMPLEACC_CLIENT_DETAILS', 'Details for client');
// Elements of Client
\define('_MD_WGSIMPLEACC_CLIENT_ID', 'Id');
\define('_MD_WGSIMPLEACC_CLIENT_NAME', 'Name');
\define('_MD_WGSIMPLEACC_CLIENT_FULLADDRESS', 'Address');
\define('_MD_WGSIMPLEACC_CLIENT_POSTAL', 'Postal');
\define('_MD_WGSIMPLEACC_CLIENT_CITY', 'City');
\define('_MD_WGSIMPLEACC_CLIENT_ADDRESS', 'Address');
\define('_MD_WGSIMPLEACC_CLIENT_CTRY', 'Country');
\define('_MD_WGSIMPLEACC_CLIENT_PHONE', 'Phone');
\define('_MD_WGSIMPLEACC_CLIENT_VAT', 'Vat number');
\define('_MD_WGSIMPLEACC_CLIENT_CREDITOR', 'Creditor (vendor)');
\define('_MD_WGSIMPLEACC_CLIENT_DEBTOR', 'Debtor');
\define('_MD_WGSIMPLEACC_CLIENT_ONLINE', 'Online');
// Statistics
\define('_MD_WGSIMPLEACC_STATISTICS', 'Statistics');
\define('_MD_WGSIMPLEACC_STATISTICS_ALL_SELECT', 'Select allocations');
\define('_MD_WGSIMPLEACC_STATISTICS_ACC_SELECT', 'Select accounts');
\define('_MD_WGSIMPLEACC_STATISTICS_TYPE', 'Type of export');
\define('_MD_WGSIMPLEACC_STATISTICS_TYPE_TIMELINE', 'Timeline');
\define('_MD_WGSIMPLEACC_STATISTICS_TYPE_DISTR', 'Distribution');
\define('_MD_WGSIMPLEACC_STATISTICS_SHOW', 'Show Statistics');
// Outputs
\define('_MD_WGSIMPLEACC_OUTPUTS', 'Outputs');
\define('_MD_WGSIMPLEACC_OUTPUT_TRA_TITLE', 'Output Transaktions');
\define('_MD_WGSIMPLEACC_OUTPUT_BALANCES', 'Output Balances');
// History
\define('_MD_WGSIMPLEACC_HISTORY_ID', 'History Id');
\define('_MD_WGSIMPLEACC_HISTORY_TYPE', 'Type');
\define('_MD_WGSIMPLEACC_HISTORY_DATECREATED', 'Date History');
\define('_MD_WGSIMPLEACC_TRAHISTORY_LIST', 'History for transaction');
\define('_MD_WGSIMPLEACC_TRAHISTORY_DELETED', 'List of deleted transactions');
// Submit
\define('_MD_WGSIMPLEACC_SUBMIT', 'Submit');
// Modal
\define('_MD_WGSIMPLEACC_MODAL_TRATITLE', 'Details for transaction %s');
// Form
\define('_MD_WGSIMPLEACC_FORM_OK', 'Successfully saved');
\define('_MD_WGSIMPLEACC_FORM_DELETE_OK', 'Successfully deleted');
\define('_MD_WGSIMPLEACC_FORM_DELETE_ERROR', 'Error when deleting data');
\define('_MD_WGSIMPLEACC_FORM_SURE_DELETE', "Are you sure to delete: <b><span style='color : Red;'>%s </span></b>");
\define('_MD_WGSIMPLEACC_FORM_SURE_RENEW', "Are you sure to update: <b><span style='color : Red;'>%s </span></b>");
\define('_MD_WGSIMPLEACC_FORM_ACTION', 'Action');
\define('_MD_WGSIMPLEACC_FORM_UPLOAD', 'Upload file');
\define('_MD_WGSIMPLEACC_FORM_UPLOAD_SIZE', 'Max file size: ');
\define('_MD_WGSIMPLEACC_FORM_UPLOAD_SIZE_MB', 'MB');
\define('_MD_WGSIMPLEACC_FORM_IMAGE_PATH', 'Files in %s :');
\define('_MD_WGSIMPLEACC_FORM_UPLOAD_ALLOWEDMIME', 'Allowed mimetypes:');
\define('_MD_WGSIMPLEACC_FORM_DELETE_CONFIRM', 'Confirm delete');
\define('_MD_WGSIMPLEACC_FORM_DELETE_LABEL', 'Do you really want to delete:');
\define('_MD_WGSIMPLEACC_FORM_UPLOAD_MULTIDOTS', 'The file name contains multiple dots. This can cause problems during file upload');
//Constants class
\define('_MD_WGSIMPLEACC_CLASS_EXPENSES', 'Expenses');
\define('_MD_WGSIMPLEACC_CLASS_INCOME', 'Incomes');
\define('_MD_WGSIMPLEACC_CLASS_BOTH', 'Both');
// Constants Status
\define('_MD_WGSIMPLEACC_TRASTATUS_NONE', 'No status');
\define('_MD_WGSIMPLEACC_TRASTATUS_DELETED', 'Deleted');
\define('_MD_WGSIMPLEACC_TRASTATUS_SUBMITTED', 'Submitted');
\define('_MD_WGSIMPLEACC_TRASTATUS_APPROVED', 'Approved');
\define('_MD_WGSIMPLEACC_TRASTATUS_CREATED', 'Created');
\define('_MD_WGSIMPLEACC_TRASTATUS_LOCKED', 'Locked');
\define('_MD_WGSIMPLEACC_BALSTATUS_NONE', 'No status');
\define('_MD_WGSIMPLEACC_BALSTATUS_APPROVED', 'Approved');
\define('_MD_WGSIMPLEACC_BALSTATUS_TEMPORARY', 'Temporary');
\define('_MD_WGSIMPLEACC_ONOFF_OFFLINE', 'Offline');
\define('_MD_WGSIMPLEACC_ONOFF_ONLINE', 'Online');
\define('_MD_WGSIMPLEACC_ONOFF_HIDDEN', 'Hidden');
//PDF files
\define('_MD_WGSIMPLEACC_PDF_BUTTON', 'Output as PDF');
\define('_MD_WGSIMPLEACC_PDF_TRANAME', 'Transaction_%y_%n');
\define('_MD_WGSIMPLEACC_PDF_TRAHEADER', 'Transaction %y / %n');
\define('_MD_WGSIMPLEACC_PDF_BALNAME', 'Output_Balances');
\define('_MD_WGSIMPLEACC_PDF_BALHEADER', 'Output Balances');
// ---------------- Print ----------------
\define('_MD_WGSIMPLEACC_PRINT', 'Print');
// ---------------- Menu ----------------
\define('_MD_WGSIMPLEACC_MENUADMIN', 'Administration');
\define('_MD_WGSIMPLEACC_MENUUSER', 'User');
\define('_MD_WGSIMPLEACC_MENUNOTIF', 'Notification');
\define('_MD_WGSIMPLEACC_MENUINBOX', 'Inbox');
// ---------------- Online ----------------
\define('_MD_WGSIMPLEACC_ONLINE', 'Online');
\define('_MD_WGSIMPLEACC_OFFLINE', 'Offline');
// ---------------- Activate ----------------
\define('_MD_WGSIMPLEACC_ACTIVE', 'Activated (click to deactivate)');
\define('_MD_WGSIMPLEACC_NONACTIVE', 'Deactivated (click to activate)');
// Calculator
\define('_MD_WGSIMPLEACC_CALC', 'Calculator');
\define('_MD_WGSIMPLEACC_CALC_APPLY', 'Apply result');
// Admin link
\define('_MD_WGSIMPLEACC_ADMIN', 'Admin');
// ---------------- End ----------------
// version 1.3.3
\define('_MD_WGSIMPLEACC_THEREARENT_PROCESSING', "There aren't processing steps at the moment");
//Transaction
\define('_MD_WGSIMPLEACC_TRANSACTION_PROCESSING', 'Next Processing');
// Processing
\define('_MD_WGSIMPLEACC_PROCESSING', 'Processing steps');
\define('_MD_WGSIMPLEACC_PROCESSING_NEXT', 'Next Processing');
\define('_MD_WGSIMPLEACC_PROCESSING_LIST', 'List of Processing steps');
// Processing add/edit
\define('_MD_WGSIMPLEACC_PROCESSING_ADD', 'Add Processing steps');
\define('_MD_WGSIMPLEACC_PROCESSING_EDIT', 'Edit Processing steps');
\define('_MD_WGSIMPLEACC_PROCESSING_DETAILS', 'Details for Processing steps');
// Elements of Processing
\define('_MD_WGSIMPLEACC_PROCESSING_ID', 'Id');
\define('_MD_WGSIMPLEACC_PROCESSING_TEXT', 'Text');
\define('_MD_WGSIMPLEACC_PROCESSING_INCOME', 'Income');
\define('_MD_WGSIMPLEACC_PROCESSING_EXPENSES', 'Expenses');
\define('_MD_WGSIMPLEACC_PROCESSING_WEIGHT', 'Weight');
\define('_MD_WGSIMPLEACC_PROCESSING_ONLINE', 'Online');
\define('_MD_WGSIMPLEACC_PROCESSING_DEFAULT', 'Default');
\define('_MD_WGSIMPLEACC_PROCESSING_ONOFF', 'Change On-/Offline');
//Errors
\define('_MD_WGSIMPLEACC_ERROR_SAVE', 'Error when saving data');
// 1.3.4
\define('_MD_WGSIMPLEACC_INVALID_DATE', 'Invalid date');