<?php

$def = new ezcPersistentObjectDefinition();
$def->table = "lh_abstract_form_collected";
$def->class = "erLhAbstractModelFormCollected";

$def->idProperty = new ezcPersistentObjectIdProperty();
$def->idProperty->columnName = 'id';
$def->idProperty->propertyName = 'id';
$def->idProperty->generator = new ezcPersistentGeneratorDefinition(  'ezcPersistentSequenceGenerator' );
$def->idProperty->generator->params['sequence'] = 'lh_abstract_form_collected_id_seq';

$def->properties['form_id'] = new ezcPersistentObjectProperty();
$def->properties['form_id']->columnName   = 'form_id';
$def->properties['form_id']->propertyName = 'form_id';
$def->properties['form_id']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['ctime'] = new ezcPersistentObjectProperty();
$def->properties['ctime']->columnName   = 'ctime';
$def->properties['ctime']->propertyName = 'ctime';
$def->properties['ctime']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;

$def->properties['ip'] = new ezcPersistentObjectProperty();
$def->properties['ip']->columnName   = 'ip';
$def->properties['ip']->propertyName = 'ip';
$def->properties['ip']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['content'] = new ezcPersistentObjectProperty();
$def->properties['content']->columnName   = 'content';
$def->properties['content']->propertyName = 'content';
$def->properties['content']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

return $def;

?>