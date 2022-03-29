<?php
namespace MegaDelight\ColorToHexCode\Api;
interface HexCodeInterface
{
    /**
     * GET for Post api
     * @param string $value
     * @return string
     */
    public function getHexColor($color);
}