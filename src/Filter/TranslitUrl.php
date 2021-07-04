<?php

declare(strict_types=1);

namespace HMP\VietnameseTranslitUrls\Filter;

class TranslitUrl extends \Magento\Framework\Filter\TranslitUrl
{
    /**
     * Add correct Vietnamese transliteration
     *
     * @return array
     */
    protected function getConvertTable()
    {
        $convertTable = $this->convertTable;

        $replacements = [
            'a' => 'à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ',
            'e' => 'è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ',
            'i' => 'ì|í|ị|ỉ|ĩ',
            'o' => 'ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ',
            'u' => 'ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ',
            'y' => 'ỳ|ý|ỵ|ỷ|ỹ',
            'd' => 'đ',
            'A' => 'À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ',
            'E' => 'È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ',
            'I' => 'Ì|Í|Ị|Ỉ|Ĩ',
            'O' => 'Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ',
            'U' => 'Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ',
            'Y' => 'Ỳ|Ý|Ỵ|Ỷ|Ỹ',
            'D' => 'Đ',
        ];

        foreach ($replacements as $replacement => $replaceable) {
            $chars = explode('|', $replaceable);
            foreach ($chars as $char) {
                $convertTable[$char] = $replacement;
            }
        }

        return $convertTable;
    }
}
