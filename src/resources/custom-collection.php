<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Operations
    |--------------------------------------------------------------------------
    |
    | This array of operations is translated into methods that complete these
    | requests based on their configuration.
    |
    */

    "operations" => array(

        /**
         *    getCustomCollections() method
         *
         *    reference: http://docs.shopify.com/api/customcollection
         */
        "getCustomCollections" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/custom_collections.json",
            "summary" => "Get a list of all custom collections that contain a given product",
            "responseModel" => "defaultJsonResponse"
        ),
        
        /**
         *    getCustomCollectionCount() method
         *
         *    reference: http://docs.shopify.com/api/customcollection
         */
        "getCustomCollectionCount" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/custom_collections/count.json",
            "summary" => "Retrieve a count of all Custom Collections",
            "responseModel" => "defaultJsonResponse"
        ),
        
        /**
         *    getCustomCollection() method
         *
         *    reference: http://docs.shopify.com/api/customcollection
         */
        "getCustomCollection" => array(
            "httpMethod" => "GET",
            "uri" => "/admin/custom_collections/{id}.json",
            "summary" => "Retrieve a single Blog",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "string",
                    "location" => "uri",
                    "description" => "The ID of the Custom Collection."
                )
            )
        ),


        /**
         *    createCustomCollection() method
         *
         *    reference: http://docs.shopify.com/api/customcollection
         */
        "createCustomCollection" => array(
            "httpMethod" => "POST",
            "uri" => "/admin/customers.json",
            "summary" => "Creates a custom collection.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "custom_collection" => array(
                    "location" => "json",
                    "parameters" => array(
                        "body_html" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "handle" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "image" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "metafield" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "metafields" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "published" => array(
                            "type" => "boolean",
                            "location" => "json",
                        ),
                        "published_at" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "published_scope" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "sort_order" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "template_suffix" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "title" => array(
                            "type" => "boolean",
                            "location" => "json",
                        ),
                        "collects" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "image" => array(
                            "type" => "string",
                            "location" => "json",
                        )
                    )
                )
            )
        ),


         /**
         *    updateCustomCollection() method
         *
         *    reference: http://docs.shopify.com/api/customcollection
         */
        "updateCustomCollection" => array(
            "httpMethod" => "PUT",
            "uri" => "/admin/custom_collections/{id}.json",
            "summary" => "Update a custom collection.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                ),
                "custom_collection" => array(
                    "location" => "json",
                    "parameters" => array(
                        "id" => array(
                            "type" => "number",
                            "location" => "json",
                        ),
                        "body_html" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "handle" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "image" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "metafield" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "metafields" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "published" => array(
                            "type" => "boolean",
                            "location" => "json",
                        ),
                        "published_at" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "published_scope" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "sort_order" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "template_suffix" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "title" => array(
                            "type" => "boolean",
                            "location" => "json",
                        ),
                        "collects" => array(
                            "type" => "string",
                            "location" => "json",
                        ),
                        "image" => array(
                            "type" => "string",
                            "location" => "json",
                        )
                    )
                )
            )
        ),

        /**
         *    deleteCustomCollection() method
         *
         *    reference: http://docs.shopify.com/api/customcollection
         */
        "deleteCustomCollection" => array(
            "httpMethod" => "DELETE",
            "uri" => "/admin/custom_collections/{id}.json",
            "summary" => "Delete a custom collection.",
            "responseModel" => "defaultJsonResponse",
            "parameters" => array(
                "id" => array(
                    "type" => "number",
                    "location" => "uri",
                    "description" => "Unique numeric identifier for the custom collection."
                )
            )
        )
        
    ),

    /*
    |--------------------------------------------------------------------------
    | Models
    |--------------------------------------------------------------------------
    |
    | This array of models is specifications to returning the response
    | from the operation methods.
    |
    */

    "models" => array(

    ),
);