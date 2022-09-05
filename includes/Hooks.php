<?php
namespace MediaWiki\Extension\ArrayMap;

use Parser;

class Hooks implements \MediaWiki\Hook\ParserFirstCallInitHook {
	public function onParserFirstCallInit( $parser ) {
        $parser->setFunctionHook( 'arraymap', [ ParserFunction_ArrayMap::class, 'run' ], Parser::SFH_OBJECT_ARGS );
        $parser->setFunctionHook( 'arraymaptemplate', [ ParserFunction_ArrayMapTemplate::class, 'run' ], Parser::SFH_OBJECT_ARGS );

		return true;
	}
}