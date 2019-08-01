<?php

use Illuminate\Database\Seeder;

class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        DB::table('products')->insert([
            'product_name' => 'pocket cotton sweatshirt',
            'quantity' => '1',
            'description' => 'Great for winter, soft cotton make you feel comfortable',
            'image' => 'imgae/product_1.png' 
            ]);
            
        DB::table('products')->insert([   
            'product_name' => 'Addidas truck suit',
            'quantity' => '3',
            'description' => '99% used, comfortable and soft',
            'image' => 'https://www.adidas.be/en/sst-track-suit/ED7670.html',
            'price' => 8.5
        ]);

        DB::table('products')->insert([
            'product_name' => 'Short dress',
            'quantity' => '2',
            'description' => '95% used, cute and pretty for 45kg woman',
            'image' => 'https://scontent.fpnh11-1.fna.fbcdn.net/v/t1.0-9/66754891_2376014272463835_5310068046017069056_n.jpg?_nc_cat=104&_nc_oc=AQmKDr56QexMCTlOzIN368Rih_WQtVIBGY1acywi7ofYX1rN1i-Gip5YjGmItG7zE34&_nc_ht=scontent.fpnh11-1.fna&oh=d126619a3de5e5815b422755ed6a7e4e&oe=5DB1CD00',
            'price' => 12.2
        ]);

        DB::table('products')->insert([
            'product_name' => 'White jumpsuit',
            'quantity' => '1',
            'description' => '95% used, cute and pretty for 45kg woman',
            'image' => 'https://scontent.fpnh11-1.fna.fbcdn.net/v/t1.0-9/66715397_2367660719965857_700614680439160832_n.jpg?_nc_cat=107&_nc_oc=AQnGpBVwUgrF9dc_4cPqSzrMZoTMCWXt4vu-hk9utirDf7a84hxgm2AEzEZuEqgG3o8&_nc_ht=scontent.fpnh11-1.fna&oh=a8bb54860c428a673895bf1039874989&oe=5DA55B89',
            'price' => 8.4
        ]);

        DB::table('products')->insert([
            'product_name' => 'yellow off shoulder shortdress',
            'quantity' => '1',
            'description' => '95% used, cute and pretty for 45kg woman',
            'image' => 'https://scontent.fpnh11-1.fna.fbcdn.net/v/t1.0-9/66511308_2367659433299319_604173702363348992_n.jpg?_nc_cat=109&_nc_oc=AQln-gI4i-CmqAmdUGCE5umRhT1I5GdrsZTdLYJL67fLl_sJ82F9z15TPaOyo0BdzCw&_nc_ht=scontent.fpnh11-1.fna&oh=0a1abf90c232dde63e28206d14f97b20&oe=5DAB68C1',
            'price' => 5.59
        ]);

        DB::table('products')->insert([
            'product_name' => 'red short suit',
            'quantity' => '1',
            'description' => '90% used, cute and pretty for 45kg woman',
            'image' => 'https://scontent.fpnh11-1.fna.fbcdn.net/v/t1.0-9/66309705_2367658579966071_1692040840576237568_n.jpg?_nc_cat=109&_nc_oc=AQnIJw4sr7zDW7bVydL5n1rPFmpxpY9RhxMp57k9rdYMk9vzw0Yu9Is61R5RTeJJCH4&_nc_ht=scontent.fpnh11-1.fna&oh=7dc98180201aff20f8ece88ed17580dd&oe=5DEAFE25',
            'price' => 4.5
        ]);

        //man 

        DB::table('products')->insert([
            'product_name' => 'white T-shirt',
            'quantity' => '2',
            'description' => '90% used, from 50-65kg man',
            'image' => 'https://scontent.fpnh11-1.fna.fbcdn.net/v/t1.0-9/61723080_1043563149181439_4308995256189190144_n.jpg?_nc_cat=100&_nc_oc=AQnqRWp8GeAB-NDdyWjm1Rk5fB_hLpy7kzpP1lqVR1FUcMLKpBpXtrstcFcZkskvxXg&_nc_ht=scontent.fpnh11-1.fna&oh=1655db97b9afa18753124b26db5f2a5d&oe=5DBA76AB',
            'price' => 2.5
        ]);

        DB::table('products')->insert([
            'product_name' => 'LV T-shirt',
            'quantity' => '1',
            'description' => '95% used, From60-75kf' ,
            'image' => 'https://scontent.fpnh11-1.fna.fbcdn.net/v/t1.0-9/65756299_434118437185349_5999521833030778880_n.jpg?_nc_cat=106&_nc_oc=AQl_NhQub89E_BdKkB1dXEqAzzz_dZaJO5DQWPY6l_jVDRCmz8xyTt9NGEGg606iSFQ&_nc_ht=scontent.fpnh11-1.fna&oh=bce8723bfc40e8a636915b83a0b128ef&oe=5DBFE4ED',
            'price' => 5.6
        ]);

        DB::table('products')->insert([
            'product_name' => 'Black jeans',
            'quantity' => '2',
            'description' =>  'size L (75-80kg)',
            'image' => 'https://scontent.fpnh11-1.fna.fbcdn.net/v/t1.0-9/65384951_430561930874333_5068630690015215616_n.jpg?_nc_cat=111&_nc_oc=AQlQ_OGUbW04mki7T8RJmnYjptjSqaOnMJgxD1whiqN5Zz7b9Epam5T2NQgC_ImisQI&_nc_ht=scontent.fpnh11-1.fna&oh=22cc3d5ec4c4f84af2af969d4dd16215&oe=5DA0A3EF',
            'price' => 5.6
        ]);

        DB::table('products')->insert([
            'product_name' => 'Black jeans',
            'quantity' => '1',
            'description' => 'size L (75-80kg)',
            'image' => 'https://scontent.fpnh11-1.fna.fbcdn.net/v/t1.0-9/65384951_430561930874333_5068630690015215616_n.jpg?_nc_cat=111&_nc_oc=AQlQ_OGUbW04mki7T8RJmnYjptjSqaOnMJgxD1whiqN5Zz7b9Epam5T2NQgC_ImisQI&_nc_ht=scontent.fpnh11-1.fna&oh=22cc3d5ec4c4f84af2af969d4dd16215&oe=5DA0A3EF',
            'price' => 5.6
        ]);

        DB::table('products')->insert([
            'product_name' => 'Black G2000 shirt',
            'quantity' => '1',
            'description' => 'size L (75-80kg)',
            'image' => 'https://scontent.fpnh11-1.fna.fbcdn.net/v/t1.0-9/46057178_1995058903906754_3794055130102366208_n.jpg?_nc_cat=102&_nc_oc=AQk9rkAesFM5TzrvCvbuXIRD-N5-Exsk2WTl4AlBP3whDzbSOj5ClagDZUGnjz7PStQ&_nc_ht=scontent.fpnh11-1.fna&oh=e632da8c85ad292bac0cce29940db8e4&oe=5DB50526',
            'price' => 5.6
        ]);

        DB::table('products')->insert([
            'product_name' => 'Black G2000 shirt',
            'quantity' => '1',
            'description' => 'size L (75-80kg)',
            'image' => 'https://scontent.fpnh11-1.fna.fbcdn.net/v/t1.0-9/32169447_1737224336356880_828921167640264704_n.jpg?_nc_cat=110&_nc_oc=AQnzigkIEzW9MjXn4jOy67-mX0geFpYmwizDTTXDw24VdKpDAhjf307rTn9b00_6Uws&_nc_ht=scontent.fpnh11-1.fna&oh=18097f1f673aab7653f7c5114476b6e8&oe=5DEB2DF8',
            'price' => 8
        ]);
     }
}
