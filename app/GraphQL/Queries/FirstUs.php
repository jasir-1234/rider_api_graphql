<?php

namespace App\GraphQL\Queries;

use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class FirstUs
{
   /**
     * Return a value for the field.
     *
     * @param  null  $rootValue Usually contains the result returned from the parent field. In this case, it is always `null`.
     * @param  mixed[]  $args The arguments that were passed into the field.
     * @param  \Nuwave\Lighthouse\Support\Contracts\GraphQLContext  $context Arbitrary data that is shared between all fields of a single query.
     * @param  \GraphQL\Type\Definition\ResolveInfo  $resolveInfo Information about the query itself, such as the execution state, the field name, path to the field from the root, and more.
     * @return mixed
     */
    public function __invoke($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        return [
            "info" => "
            KMGC waterproofing and paints Pvt.Ltd, is a flagship company of Kayal Madathil Group Of Companies. It is a quality driven leading manufacturer and distributor of high quality products in fields of construction chemicals. An ISO 9001:2015 certified company with a strong family culture with loyal, experienced and many long serving employees. By supplying world class products and managing installations via our industry leading contractor network, we take a responsive and personable approach to providing high performance, long lasting roofing systems.

            One of the many benifits of working with us is our end-to-end approach to every project we undertake, by trusting a single source to handle every aspect from initial consultation and design, through to final installation and after sales care and maintenance, you can be sure of a seamless operation and a successful outcome every time.
            
            We offer a broad range of waterproofing and construction chemical products and services for buildings and infrastructure. Energy and environmental optimization are key components of the offer. The especially blend polymers in perfect mix marks our products customer satisfactory and acceptable.
            
            KMGC is a not-for-profit organization with a vision to excel in the area of waterproofing and paints with highest warranty assurance and customer favorable products underpinning customer satisfaction. Under KMGC, We offer a wide range of waterproofing solutions that are specially developed to meet the requirements of the customers.
            
            The success of every project is largely down to the attention to detail carried out in the early stages. Our research team comprising of highly innovative heads create the overview of the customer requirements and design the products that can meet their needs. 
            
            KMGC is a not-for-profit organization with a vision to excel in the area of waterproofing and paints with highest warranty assurance and customer favorable products underpinning customer satisfaction.
            
            KMGC takes care of your waterproofing strategy from start to finish, including technical advice and guidance, preparation of sectional details, approval of drawings, site inspections and ongoing site support.",
            "image" => [
                "url" => url('assets/images/about_damsure.jpg')
            ]
        ];
    }
}
