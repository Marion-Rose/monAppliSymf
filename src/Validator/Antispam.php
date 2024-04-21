<?php
namespace App\Validator;
use Symfony\Component\Validator\Constraint;
/**
 * @Annotation
 * @Target({"PROPERTY", "METHOD", "ANNOTATION"})
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
#[\Attribute(\Attribute::TARGET_PROPERTY | \Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class Antispam extends Constraint
{
    public $message = 'Votre champ ne doit contenir que des caractères alphanumériques';
    public function validatedBy()
    {
        return static::class.'Validator';
    }
}