<?php
/**
 * Created by PhpStorm.
 * User: 俊杰
 * Date: 14-9-9
 * Time: 上午10:17
 */

namespace iit\file;

use yii\base\Component;
use yii\base\InvalidParamException;

abstract class File extends Component
{
    private $_fileId;

    public function putFile($filePath)
    {
        $this->_fileId = $this->put($filePath);
        return $this->_fileId;
    }

    abstract protected function put($filePath);

    public function copyFile($fileId = null)
    {
        $fileId = $fileId === null ? $this->_fileId : $fileId;
        if ($fileId === null) {
            throw new InvalidParamException('Please Use putFile Method');
        }
        return $this->copy($fileId);
    }

    abstract protected function copy($fileId);

    public function getFile($fileId = null)
    {
        $fileId = $fileId === null ? $this->_fileId : $fileId;
        if ($fileId === null) {
            throw new InvalidParamException('Please Use putFile Method');
        }
        return $this->get($fileId);
    }

    abstract protected function get($fileId);

    public function getFileInfo()
    {

    }


}