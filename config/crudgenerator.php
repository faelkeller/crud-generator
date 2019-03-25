<?php

return [

    'custom_template' => false,

    /*
    |--------------------------------------------------------------------------
    | Crud Generator Template Stubs Storage Path
    |--------------------------------------------------------------------------
    |
    | Here you can specify your custom template path for the generator.
    |
     */

    'path' => base_path('resources/crud-generator/'),

    /**
     * Columns number to show in view's table.
     */
    'view_columns_number' => 3,

    /**
     * Delimiter for template vars
     */
    'custom_delimiter' => ['%%', '%%'],

    /*
    |--------------------------------------------------------------------------
    | Dynamic templating
    |--------------------------------------------------------------------------
    |
    | Here you can specify your customs templates for the generator.
    | You can set new templates or delete some templates if you do not want them.
    | You can also choose which values are passed to the views and you can specify a custom delimiter for all templates
    |
    | Those values are available :
    |
    | formFields
    | formFieldsHtml
    | varName
    | crudName
    | crudNameCap
    | crudNameSingular
    | primaryKey
    | modelName
    | modelNameCap
    | viewName
    | routePrefix
    | routePrefixCap
    | routeGroup
    | formHeadingHtml
    | formBodyHtml
    |
    |
     */
    'dynamic_view_template' => [
        'index' => ['formHeadingHtml', 'formBodyHtml', 'crudName', 'crudNameCap', 'modelName', 'viewName', 'routeGroup', 'primaryKey', 'labelView', 'labelSearch', 'labelAddNew', 'labelEdit', 'labelDelete', 'labelConfirmDelete'],
        'form' => ['formFieldsHtml', 'labelCreate', 'labelUpdate'],
        'create' => ['crudName', 'crudNameCap', 'modelName', 'modelNameCap', 'viewName', 'routeGroup', 'viewTemplateDir', 'labelBack', 'labelCreateNew'],
        'edit' => ['crudName', 'crudNameSingular', 'crudNameCap', 'modelNameCap', 'modelName', 'viewName', 'routeGroup', 'primaryKey', 'viewTemplateDir', 'labelEdit', 'labelBack'],
        'show' => ['formHeadingHtml', 'formBodyHtml', 'formBodyHtmlForShowView', 'crudName', 'crudNameSingular', 'crudNameCap', 'modelName', 'viewName', 'routeGroup', 'primaryKey', 'labelEdit', 'labelDelete', 'labelConfirmDelete', 'labelBack'],
        /*
         * Add new stubs templates here if you need to, like action, datatable...
         * custom_template needs to be activated for this to work
         */
    ],
    /*
     * Limit words for colum on index page crud
     */
    'limit_words_column_index' => 50,
    
    'default_words' => [
        'search' => 'Search...',
        'addNew' => 'Add New',
        'view' => 'View',
        'edit' => 'Edit',
        'delete' => 'Delete',
        'confirmDelete' => 'Confirm delete?',
        'back' => 'Back',
        'createNew' => 'Create New',
        'create' => 'Create',
        'update' => 'Update',
        'yes' => 'Yes',
        'no' => 'No'
    ]
    

];
