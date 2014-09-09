<?php
/**
 * Created by PhpStorm.
 * User: 俊杰
 * Date: 14-9-9
 * Time: 下午2:26
 */

namespace iit\file;


class LocalFile extends File
{
    public $basePath;

    function getFile($fileName, $filePath = null)
    {
        // TODO: Implement getFile() method.
    }

    function getFileInfo($fileName, $filePath = null)
    {
        // TODO: Implement getFileInfo() method.
    }

    function saveFile($file)
    {
        // TODO: Implement saveFile() method.
    }

    function getFielUrl($filePath)
    {
        // TODO: Implement getFielUrl() method.
    }

    function fileExist($filePath)
    {
        // TODO: Implement fileExist() method.
    }

    function getFileList($path)
    {
        // TODO: Implement getFileList() method.
    }

    function createPath($pathName)
    {
        // TODO: Implement createPath() method.
    }

    function deletePath($pathName)
    {
        // TODO: Implement deletePath() method.
    }

    function renamePath($oldPathName, $newPathName)
    {
        // TODO: Implement renamePath() method.
    }
}