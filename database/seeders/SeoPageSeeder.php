<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SeoPage;

class SeoPageSeeder extends Seeder
{
    public function run(): void
    {
        $pages = [
            [
                'page_key' => 'home',
                'page_label' => 'Home Page',
                'meta_title' => 'Courtice Home Health Care | Medical Supplies & Home Health Products',
                'meta_description' => 'Courtice Home Health Care — your local source for mobility aids, incontinence supplies, compression, braces, and home safety equipment. ADP authorized. Direct billing available.',
                'meta_keywords' => 'home health care, mobility aids, incontinence supplies, compression stockings, ADP vendor, Green Shield billing, Courtice',
                'og_title' => 'Courtice Home Health Care',
                'og_description' => 'Find mobility aids, incontinence supplies, and home safety equipment with expert guidance.',
                'og_image' => null,
                'canonical_url' => null,
            ],
            [
                'page_key' => 'about',
                'page_label' => 'About Us',
                'meta_title' => 'About Us | Courtice Home Health Care',
                'meta_description' => 'Learn about Courtice Home Health Care — 15+ years supporting independent living in the community.',
                'meta_keywords' => 'about courtice home health care, home health experts, community care',
                'og_title' => 'About Courtice Home Health Care',
                'og_description' => '15+ years supporting independent living with expert home health products.',
                'og_image' => null,
                'canonical_url' => null,
            ],
            [
                'page_key' => 'contact',
                'page_label' => 'Contact Us',
                'meta_title' => 'Contact Us | Courtice Home Health Care',
                'meta_description' => 'Get in touch with Courtice Home Health Care. Visit our local store or call us at +1 905-721-0004.',
                'meta_keywords' => 'contact home health care, courtice store, phone, address',
                'og_title' => 'Contact Courtice Home Health Care',
                'og_description' => 'Reach us at our local store with same-day availability.',
                'og_image' => null,
                'canonical_url' => null,
            ],
            [
                'page_key' => 'services',
                'page_label' => 'Services',
                'meta_title' => 'Our Services | Courtice Home Health Care',
                'meta_description' => 'Explore our range of home health services including mobility solutions, incontinence supplies, and daily living aids.',
                'meta_keywords' => 'home health services, mobility, incontinence, braces, compression, WSIB',
                'og_title' => 'Services — Courtice Home Health Care',
                'og_description' => 'View all our home health care services and product categories.',
                'og_image' => null,
                'canonical_url' => null,
            ],
            [
                'page_key' => 'service-details',
                'page_label' => 'Service Detail Page',
                'meta_title' => 'Service Details | Courtice Home Health Care',
                'meta_description' => 'Detailed information about our home health products and services.',
                'meta_keywords' => 'service detail, home health product, care equipment',
                'og_title' => 'Service Details',
                'og_description' => 'Find detailed product and service information.',
                'og_image' => null,
                'canonical_url' => null,
            ],
            [
                'page_key' => 'products',
                'page_label' => 'Products',
                'meta_title' => 'Products | Courtice Home Health Care',
                'meta_description' => 'Browse our full range of home health care products.',
                'meta_keywords' => 'home health products, medical supplies, mobility products',
                'og_title' => 'Products — Courtice Home Health Care',
                'og_description' => 'Shop our complete selection of home health products.',
                'og_image' => null,
                'canonical_url' => null,
            ],
            [
                'page_key' => 'blog',
                'page_label' => 'Blog',
                'meta_title' => 'Blog | Courtice Home Health Care',
                'meta_description' => 'Health tips, product guides, and news from Courtice Home Health Care.',
                'meta_keywords' => 'home health blog, health tips, product guides',
                'og_title' => 'Blog — Courtice Home Health Care',
                'og_description' => 'Stay informed with our latest health tips and news.',
                'og_image' => null,
                'canonical_url' => null,
            ],
            [
                'page_key' => 'blog-details',
                'page_label' => 'Blog Detail Page',
                'meta_title' => 'Blog | Courtice Home Health Care',
                'meta_description' => 'Read our health tips and guides.',
                'meta_keywords' => 'health blog, home care tips',
                'og_title' => 'Blog Post — Courtice Home Health Care',
                'og_description' => 'Read tips and guides from our home health experts.',
                'og_image' => null,
                'canonical_url' => null,
            ],
            [
                'page_key' => 'faq',
                'page_label' => 'FAQ',
                'meta_title' => 'FAQ | Courtice Home Health Care',
                'meta_description' => 'Frequently asked questions about our home health products and services.',
                'meta_keywords' => 'home health FAQ, questions, answers',
                'og_title' => 'FAQ — Courtice Home Health Care',
                'og_description' => 'Find answers to common questions about our products and services.',
                'og_image' => null,
                'canonical_url' => null,
            ],
            [
                'page_key' => 'appoinment',
                'page_label' => 'Appointment / Shop',
                'meta_title' => 'Shop Our Products | Courtice Home Health Care',
                'meta_description' => 'Shop or book an appointment with Courtice Home Health Care today.',
                'meta_keywords' => 'shop, appointment, home health products',
                'og_title' => 'Shop — Courtice Home Health Care',
                'og_description' => 'Browse and shop our home health product range.',
                'og_image' => null,
                'canonical_url' => null,
            ],
            [
                'page_key' => 'doctor',
                'page_label' => 'Our Team',
                'meta_title' => 'Our Team | Courtice Home Health Care',
                'meta_description' => 'Meet the dedicated team at Courtice Home Health Care.',
                'meta_keywords' => 'team, staff, home health care professionals',
                'og_title' => 'Our Team — Courtice Home Health Care',
                'og_description' => 'Get to know the people behind Courtice Home Health Care.',
                'og_image' => null,
                'canonical_url' => null,
            ],
            [
                'page_key' => 'default',
                'page_label' => 'Default (Fallback)',
                'meta_title' => 'Courtice Home Health Care',
                'meta_description' => 'Courtice Home Health Care — your trusted local home health products provider.',
                'meta_keywords' => 'home health care, medical supplies, Courtice',
                'og_title' => 'Courtice Home Health Care',
                'og_description' => 'Your local home health care products store.',
                'og_image' => null,
                'canonical_url' => null,
            ],
        ];

        foreach ($pages as $page) {
            SeoPage::updateOrCreate(
                ['page_key' => $page['page_key']],
                $page
            );
        }
    }
}
