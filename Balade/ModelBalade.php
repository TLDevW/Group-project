<?php
class ModelBalade
{
    public function __construct()
    {
    }

    public function getDataBalade()
    {
        $url = "https://opendata.paris.fr/api/records/1.0/search/?dataset=que-faire-a-paris-&q=balade&rows=30&facet=category&facet=tags&facet=address_name&facet=address_zipcode&facet=address_city&facet=pmr&facet=blind&facet=deaf&facet=access_type&facet=price_type";
        $json = file_get_contents($url);
        $data = json_decode($json, true, 512, JSON_OBJECT_AS_ARRAY);
        return $data;
    }
}
