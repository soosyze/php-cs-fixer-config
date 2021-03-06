<?php

namespace Soosyze\PhpCsFixer;

use PhpCsFixer\Config as PhpCsFixerConfig;

class Config extends PhpCsFixerConfig
{
    public function __construct()
    {
        parent::__construct('Soosyze');
    }

    public function getRules(): array
    {
        return [
            '@PSR2'                                      => true,
            /* Force la déclaration des tableaux sous leur forme courte. */
            'array_syntax'                               => [ 'syntax' => 'short' ],
            /* Ajoute un saut de ligne avant chaque return en fin de fonction. */
            'blank_line_before_statement'                => true,
            /* Ajoute un espace entre le cast et la variable. */
            'cast_spaces'                                => true,
            /* Les éléments de classe, de trait et d’interface doivent être séparés par une ligne vierge. */
            'class_attributes_separation'                => true,
            /* Combine les isset() && successives. */
            'combine_consecutive_issets'                 => true,
            /* Combine les unset() successives. */
            'combine_consecutive_unsets'                 => true,
            /* Ajoute un espace avant et après les points de concaténation. */
            'concat_space'                               => [ 'spacing' => 'one' ],
            /* Remplace les commentaires simples # par //. */
            'fully_qualified_strict_types'               => true,
            /* Retire les parenthèses des include/require. */
            'include'                                    => true,
            /* Ne pas avoir de code à l'ouverture d'une balise php */
            'linebreak_after_opening_tag'                => true,
            /* Supprime les commentaires vides. */
            'lowercase_cast'                             => true,
            /* Les mots-clés PHP DOIVENT être en minuscules. */
            'lowercase_keywords'                         => true,
            /* Les références statiques de classe self, static et parent DOIVENT être en minuscule. */
            'lowercase_static_reference'                 => true,
            /* Les constantes magiques doivent être utilisées avec la bonne case. */
            'magic_constant_casing'                      => true,
            /* Les définitions de méthodes magiques et les appels doivent utiliser la case appropriée. */
            'magic_method_casing'                        => true,
            /* Supprime les commentaires vides. */
            'no_empty_comment'                           => true,
            /* Supprime les blocks PHPDoc vides. */
            'no_empty_phpdoc'                            => true,
            /* Supprimez les instructions de point virgule inutiles. */
            'no_empty_statement'                         => true,
            /* Supprime les lignes vides supplémentaire. */
            'no_extra_blank_lines'                       => true,
            /* Supprimer les barres obliques au début de use. */
            'no_leading_import_slash'                    => true,
            /* La ligne de déclaration de l'espace de noms ne doit pas contenir d'espaces de début. */
            'no_leading_namespace_whitespace'            => true,
            /* Remplace l'utilisation du print par echo. */
            'no_mixed_echo_print'                        => true,
            /* Supprime les espaces d'une seule ligne avant la fermeture du point-virgule. */
            'no_singleline_whitespace_before_semicolons' => true,
            /* Remplace les éléments elseif superflus par if. */
            'no_superfluous_elseif'                      => true,
            /* Supprime les accolades superflus. */
            'no_unneeded_curly_braces'                   => true,
            /* Supprime les parenthèses superflus. */
            'no_unneeded_control_parentheses'            => true,
            /* Supprimez les virgules de fin dans les listes. */
            'no_trailing_comma_in_list_call'             => true,
            /* Supprimez les virgules de fin dans les array. */
            'no_trailing_comma_in_singleline_array'      => true,
            /* Remplace les <?= par des <?php echo. */
            'echo_tag_syntax'                            => true,
            /* Les annotations PHPUnit doivent être un FQCN, y compris un espace de noms racine. */
            'php_unit_fqcn_annotation'                   => true,
            /* Appliquez la camelCase aux méthodes de test PHPUnit, après la configuration. */
            'php_unit_method_casing'                     => true,
            /* Aligne tus les éléments des balises phpdoc. */
            'phpdoc_align'                               => true,
            /* Indente les Docblocks au niveau du sujet documenté. */
            'phpdoc_indent'                              => true,
            /* Supprime les annotations @access de PHPDoc. */
            'phpdoc_no_access'                           => true,
            /* Ordonne les annotations PHPDoc. */
            'phpdoc_order'                               => true,
            /* Supprime les lignes vides au début et fin de la PHPDoc. */
            'phpdoc_trim'                                => true,
            /* Les variables locales, dynamiques et directement référencées ne doivent pas être affectées ni directement renvoyées par une fonction ou une méthode. */
            'return_assignment'                          => true,
            /* Les versions courtes des cast seront utilisées. */
            'short_scalar_cast'                          => true,
            /* Convertis les guillemets doubles en guillemets simples pour des chaînes simples. */
            'single_quote'                               => [ 'strings_containing_single_quote_chars' => true ],
            /* Correction des espaces après un point-virgule. */
            'space_after_semicolon'                      => true,
            /* Corrige les opérateurs d’incrémentation et de décrémentation si possible. */
            'standardize_increment'                      => true,
            /* Ordonne les éléments des class. */
            'ordered_class_elements'                     => true,
            /* Ordonne les imports (use). */
            'ordered_imports'                            => true,
            /* Les opérateurs unaires doivent être placés à côté de leurs opérandes. */
            'unary_operator_spaces'                      => true,
        ];
    }
}
