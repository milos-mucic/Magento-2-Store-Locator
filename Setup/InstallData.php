<?php

namespace Younify\StoreLocator\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallData implements InstallDataInterface
{

    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        /**
         * Install messages
         */
        $data = [
            ['status' => 'Enable',
                'store_name' => 'Younify Nis',
                'url_key' => 'www.younify.eu',
                'address' => 'Vožda Karađorđa 5/14, 18000',
                'phone' => '+381 60 567 81 94',
                'email_address' => ' sales@younify.eu',
                'store_description' => '<h3 class="title">H3 Lorem Ipsum dolor sit atem</h3>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                </p>
                <button>Write a review<span class="icon-star"></span></button>',
                'featured_image' => 'https://via.placeholder.com/370x250/FBAE5C/82227B/?text=Younify',
                'working_hours' => '<p>Ponedeljak 09:00 - 17:00</p>
                                    <p>Utorak 09:00 - 17:00</p>
                                    <p>Sreda 09:00 - 17:00</p>
                                    <p>Cetvrtak 09:00 - 17:00</p>
                                    <p>Petak 09:00 - 17:00</p>
                                    <p>Subota 09:00 - 17:00</p>
                                    <p>Nedelja 09:00 - 17:00</p>',
                'city' => 'Nis',
                'latitude' => '43.3204989',
                'longitude' => '21.8984043'
            ],
            ['status' => 'Enable',
                'store_name' => 'Younify Nederlands',
                'url_key' => 'www.younify.eu',
                'address' => 'Karel van Gelderstraat 23, 6828',
                'phone' => '+381 59 456 70 83',
                'email_address' => ' sales@younify.eu',
                'store_description' => '<h3 class="title">H3 Lorem Ipsum dolor sit atem</h3>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                </p>
                <button>Write a review<span class="icon-star"></span></button>',
                'featured_image' => 'https://via.placeholder.com/370x250/FFF568/82227B/?text=Younify',
                'working_hours' =>  '<p>Ponedeljak 09:00 - 17:00</p>
                                    <p>Utorak 09:00 - 17:00</p>
                                    <p>Sreda 09:00 - 17:00</p>
                                    <p>Cetvrtak 09:00 - 17:00</p>
                                    <p>Petak 09:00 - 17:00</p>
                                    <p>Subota 09:00 - 17:00</p>
                                    <p>Nedelja 09:00 - 17:00</p>',
                'city' => 'Arnhem',
                'latitude' => '51.9842682',
                'longitude' => '5.8983559'
            ],
            ['status' => 'Enable',
                'store_name' => 'Younify Estonia',
                'url_key' => 'www.younify.eu',
                'address' => 'Metro Plaza Viru väljak 2, 10111',
                'phone' => '+381 48 345 69 72',
                'email_address' => ' sales@younify.eu',
                'store_description' => '<h3 class="title">H3 Lorem Ipsum dolor sit atem</h3>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                </p>
                <button>Write a review<span class="icon-star"></span></button>',
                'featured_image' => 'https://via.placeholder.com/370x250/C4DF9C/82227B/?text=Younify',
                'working_hours' => '<p>Ponedeljak 09:00 - 17:00</p>
                                    <p>Utorak 09:00 - 17:00</p>
                                    <p>Sreda 09:00 - 17:00</p>
                                    <p>Cetvrtak 09:00 - 17:00</p>
                                    <p>Petak 09:00 - 17:00</p>
                                    <p>Subota 09:00 - 17:00</p>
                                    <p>Nedelja 09:00 - 17:00</p>',
                'city' => 'Tallinn',
                'latitude' => '59.4375509',
                'longitude' => '24.7584021'
            ],
            ['status' => 'Enable',
            'store_name' => 'HOBO hifi Arnhem',
            'url_key' => 'www.younify.eu',
            'address' => 'Koningstraat 21 6811 DG Arnhem',
            'phone' => '026 - 442 7421',
            'email_address' => 'arnhem@hobo.nl',
            'store_description' => '<h3 class="title">H3 Lorem Ipsum dolor sit atem</h3>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                </p>
                <button>Write a review<span class="icon-star"></span></button>',
            'featured_image' => 'https://via.placeholder.com/370x250/FFF568/82227B/?text=Younify',
            'working_hours' =>  '<p>Zondag Gesloten</p>
                                    <p>maandag Gesloten</p>
                                    <p>dinsdag 10:00 - 18:00</p>
                                    <p>woensdag 10:00 - 18:00</p>
                                    <p>donderdag 10:00 - 21:00</p>
                                    <p>vrijdag 10:00 - 18:00</p>
                                    <p>zaterdag 10:00 - 17:00</p>',
            'city' => 'Arnhem',
            'latitude' => '51.9941277',
            'longitude' => '5.8903787'
        ]
        ];
        foreach ($data as $bind) {
            $setup->getConnection()
                ->insertForce($setup->getTable('younify_store_locator'), $bind);
        }
    }
}