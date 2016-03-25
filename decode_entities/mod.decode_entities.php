<?php
/**
 * Modifier_decode_entities
 * Converts HTML entities back into regular characters
 *
 * @author Chris S
 * @author_url https://github.com/chris-79
 * @version 0.1
 */
class Modifier_decode_entities extends Modifier
{
    public function index($value, $parameters=array()) {
        return HTML::decodeEntities($value);
    }
}
