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

use XoopsModules\Wgsimpleacc\Helper;

/**
 * Get the permissions ids
 *
 * @param  $permtype
 * @param  $dirname
 * @return mixed $itemIds
 */
function wgsimpleaccGetMyItemIds($permtype, $dirname)
{
    global $xoopsUser;
    static $permissions = [];
    if (\is_array($permissions) && \array_key_exists($permtype, $permissions)) {
        return $permissions[$permtype];
    }
    $moduleHandler = \xoops_getHandler('module');
    $wgsimpleaccModule = $moduleHandler->getByDirname($dirname);
    $groups = \is_object($xoopsUser) ? $xoopsUser->getGroups() : \XOOPS_GROUP_ANONYMOUS;
    $grouppermHandler = \xoops_getHandler('groupperm');
    return $grouppermHandler->getItemIds($permtype, $groups, $wgsimpleaccModule->getVar('mid'));
}

/**
 * Add content as meta tag to template
 * @param $content
 * @return void
 */

function wgsimpleaccMetaKeywords($content)
{
    global $xoopsTpl, $xoTheme;
    $myts = MyTextSanitizer::getInstance();
    $content= $myts->undoHtmlSpecialChars($myts->displayTarea($content));
    if(isset($xoTheme) && \is_object($xoTheme)) {
        $xoTheme->addMeta( 'meta', 'keywords', \strip_tags($content));
    } else {    // Compatibility for old Xoops versions
        $xoopsTpl->assign('xoops_meta_keywords', \strip_tags($content));
    }
}

/**
 * Add content as meta description to template
 * @param $content
 * @return void
 */
 
function wgsimpleaccMetaDescription($content)
{
    global $xoopsTpl, $xoTheme;
    $myts = MyTextSanitizer::getInstance();
    $content = $myts->undoHtmlSpecialChars($myts->displayTarea($content));
    if(isset($xoTheme) && \is_object($xoTheme)) {
        $xoTheme->addMeta( 'meta', 'description', \strip_tags($content));
    } else {    // Compatibility for old Xoops versions
        $xoopsTpl->assign('xoops_meta_description', \strip_tags($content));
    }
}
