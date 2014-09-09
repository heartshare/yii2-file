<?php
/**
 * Created by PhpStorm.
 * User: 俊杰
 * Date: 14-9-9
 * Time: 上午10:17
 */

namespace iit\file;

use yii\base\Component;

abstract class File extends Component
{
    abstract function getFielUrl($filePath);

    abstract function fileExist($filePath);

    abstract function getFile($filePath);

    abstract function getFileInfo($filePath);

    abstract function saveFile($file);

    abstract function getFileList($path);

    abstract function createPath($pathName);

    abstract function deletePath($pathName);

    abstract function renamePath($oldPathName, $newPathName);

}