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
    abstract public function saveFile($filePath);

    abstract public function getFile($filePath);

    abstract public function getFileInfo($filePath);

    abstract public function deleteFile($filePath);

}