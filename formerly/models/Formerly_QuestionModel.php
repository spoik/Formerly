<?php
namespace Craft;

include_once(dirname(__FILE__) . '/../enums/Formerly_QuestionType.php');

class Formerly_QuestionModel extends BaseModel
{
	protected function defineAttributes()
	{
		return array(
			'id'            => AttributeType::Number,
			'formId'        => AttributeType::Number,
			'fieldId'       => AttributeType::Number,
			'name'          => AttributeType::String,
			'handle'        => AttributeType::String,
			'required'      => AttributeType::Bool,
			'type'          => array(AttributeType::Enum, 'values' =>
                array_values(craft()->formerly_forms->getQuestionTypes())
            ),
			'options'       => AttributeType::Mixed,
			'sortOrder'     => AttributeType::SortOrder
		);
	}
}
