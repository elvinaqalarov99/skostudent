<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Blog;
use App\Models\Faq;
use App\Models\Feature;
use App\Models\Portfolio;
use App\Models\PortfolioType;
use App\Models\PrivacyPolicy;
use App\Models\Product;
use App\Models\Scholarship;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index () {
        $about = AboutUs::first();
        $faqs = Faq::take(6)->get();
        $teams = Team::take(6)->get();
        $services = Service::take(6)->get();
        $portfolios = Portfolio::with('type')->take(6)->get();
        $blogs = Blog::take(3)->get();
        $products = Product::take(6)->get();
        $testimonials = Testimonial::with('media')->orderBy('created_at', 'desc')->get();
        $partners = Feature::with('media')->orderBy('created_at', 'desc')->get();
        return view('frontend.pages.index', compact('about', 'faqs', 'teams', 'services', 'portfolios', 'blogs', 'products', 'testimonials', 'partners'));
    }

    public function products () {
        $products = Product::paginate(6);
        return view('frontend.pages.products', compact('products'));
    }

    public function productDetail ($slug) {
        $product = Product::where('slug', $slug)->firstOrFail();
        $related_products = Product::where('slug', '!=', $slug)->take(4)->get();
        return view('frontend.pages.product_detail', compact('product', 'related_products'));
    }

    public function services () {
        $services = Service::paginate(6);
        return view('frontend.pages.services', compact('services'));
    }

    public function serviceDetail ($slug) {
        $service = Service::where('slug', $slug)->firstOrFail();
        $other_services = Service::where('slug', '!=', $slug)->take(5)->get();
        return view('frontend.pages.service_detail', compact('service', 'other_services'));
    }

    public function portfolio () {
        $query = Portfolio::with('type');
        $types = PortfolioType::all();
        $type = $types->where('slug', request('tab'))->first();
        if (!empty(request('tab')) && $type) {
            $query->where('portfolio_type_id', $type->id);
        }

        $portfolios = $query->paginate(6);
        return view('frontend.pages.portfolio', compact('portfolios', 'types'));
    }

    public function portfolioDetail ($slug) {
        $portfolio = Portfolio::with('type')->where('slug', $slug)->firstOrFail();
        return view('frontend.pages.portfolio_detail', compact('portfolio'));
    }

    public function blog () {
        $query = Blog::query();

        if (!empty(request('wanted'))) {
            $query->where('title', 'like', "%" . request('wanted') . "%");
        }
        $blogs = $query->paginate(6);
        return view('frontend.pages.blog', compact('blogs'));
    }

    public function blogDetail ($slug) {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $other_blogs = Blog::where('slug', '!=', $slug)->take(5)->get();
        return view('frontend.pages.blog_detail', compact('blog', 'other_blogs'));
    }

    public function contact () {
        return view('frontend.pages.contact');
    }

    public function about () {
        $about = AboutUs::first();
        $features = Feature::take(6)->get();
        $services = Service::take(3)->get();
        return view('frontend.pages.about', compact('about', 'features', 'services'));
    }

    public function privacy () {
        $privacy = PrivacyPolicy::first();
        return view('frontend.pages.privacy', compact('privacy'));
    }

    public function scholarship () {
        $scholarships = Scholarship::orderBy('deadline', 'asc')->paginate(6);
        return view('frontend.pages.scholarship', compact('scholarships'));
    }

    public function scholarshipDetail ($slug) {
        $scholarship = Scholarship::where('slug', $slug)->firstOrFail();
        $other_scholarships = Scholarship::where('slug', '!=', $slug)->take(5)->get();
        return view('frontend.pages.scholarship_detail', compact('scholarship', 'other_scholarships'));
    }

    public function partners () {
        $partners = Feature::with('media')->orderBy('created_at', 'desc')->paginate(12);
        return view('frontend.pages.partners', compact('partners'));
    }

}
