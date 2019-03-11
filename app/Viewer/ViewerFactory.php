<?php

namespace AsciiShapes\Viewer;

use Symfony\Component\HttpFoundation\Request;

class ViewerFactory
{
    /**
     * @var string
     */
    const CONTENT_TYPE_HTML = 'html';


    /**
     * @param Request $request
     * @return \AsciiShapes\Viewer\ContentViewer
     */
    public static function create(Request $request)
    {
        switch ($request->getContentType()) {
            case self::CONTENT_TYPE_HTML:
                return HtmlContent::create();
                break;
            default:
                return TextContent::create();
        }
    }
}
