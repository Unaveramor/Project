<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Rubric;
use App\Models\City;
use App\Models\Country;
use Doctrine\Common\Cache\Cache;
use Faker\Provider\Lorem;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache as FacadesCache;
use Illuminate\Support\Facades\Cookie;
use PHPUnit\Framework\Attributes\PostCondition;

class HomeController extends Controller
{
    public function index(Request $request){

        // Cookie::queue('test','Value',1);
        // dump((Cookie::get('test')));
        // dump(Cookie::forget('test'));
        // FacadesCache::put('key','value', 60);
        // dump(FacadesCache::get('key'));
        // if(FacadesCache::has('posts')){
        //     $posts = FacadesCache::get('posts');
        // } else{
        //     $posts = Post::orderBy('id','desc')->get();
        //     FacadesCache::put('posts', $posts);
        // }

        // dump(($request->session()->all()));

        // dump(session()->all());

        // session(['cart'=> [
        // ['id' => 1, 'title' => 'product 1'],
        // ['id' => 2, 'title' => 'product 2'],
        // ]]);

        // $request->session()->push('cart', ['id' => 3, 'title' => 'product 3']);

        // $request->session()->forget('cart');

        // // dump(session('cart')[0]['title']);
        // dump(session()->all());

        // if ($request->hasCookie('last_visit')) {
        //     $visit = $request->cookie('last_visit');
        //     $now_time = now();
        //     $time = $now_time->diffInSeconds($visit);
        //     echo 'Прошло ' . $time . ' с предыдущего захода';
            
        // }
        // return response('')->cookie('last_visit', now());

        $title = 'home';
        $posts = Post::orderBy('id','desc')->paginate(3);
        return view('home', compact('title','posts'));
    }

//

    // public function bithday(){
    //     return view('bithday.bithday');
    // }


    // public function day(Request $request){
    //     $day = $request->input('day');
    //     $request->hasCookie('day');
    //     $now_time = date('Y-m-d');
    //     if($now_time == $request->hasCookie('day')){

    //     }
    //     return view('bithday.bithday',compact('day'));
    // }


//

    public function show(){
        $title = 'NoNoNo';
        $value1 = session(['name']);
        return view('about', compact('title','value1'));
    }


    public function create(){
        $title = 'Create Page';
        $value1 = session()->get('name');
        $rubrics = Rubric::pluck('title', 'id')->all();
        return view('posts.create',compact('title','value1', 'rubrics'));
    }

    public function store(Request $request){

        // dump($request->input('title'));
        // dump($request->input('cintent'));
        // dump($request->input('rubric_id'));
        // dd($request->all())
        $this->validate($request, [
            'title' => 'required|min:5|max:100',
            'content' => 'required',
            'rubric_id' => 'required|integer',
            'picture' => 'required',
        ],
        [
            'title.required' => 'Hdie1',
            'title.min:5' => 'Hdie2',
            'title.max:100' => 'Hdie3',
            'content.required' => 'Hdie4',
            'rubric_id.required' => 'Hdie5',
            'rubric_id.integer' => 'die6',
            'picture.required' => 'Hdie7',
        ]);
        if($request->hasFile('avatar')){
            $folder = date('Y-m-d');
            $request->file('picture')->store("public/picture/{$folder}");
        }

        Post::create($request->all());
        return redirect()->route('home');
    }
}



 /*$post = Post::find(2);
        dump($post->title, $post->rubric);

        $rubric = Rubric::find(2);
        dump($rubric->title, $rubric->post->title);

        $rubric = Post::find(2);
        dump($rubric->posts);*/

        /*$posts = Post::all();

        foreach($posts as $post){
        dump($post->title, $post/*rubric->//->title);*?
        }
*/
        // $rubrics = Rubric::find(2);

        // dump($rubrics->title);

        // foreach($rubrics->posts as $post){
        //     dump(($post->title));
        // }

        // return view('home');

            // $post = Post::find(1);
            // dump($post->title);
            // foreach ($post->tags as $tag){
            //     dump($tag->title);
            // }

            // $tag = Tag::find(1);
            // dump($tag->title);
            // foreach($tag->posts as $post){
            //     dump($post->title);
            // }

            // $country = Country::find(2);
            // dump($country->name);
            // foreach($country->citys as $city){
            //     dump($city->name);
            // }


            //// //////////////return view('home');////////////// ////
            
        /*$post = new Post();
        $post->title = 'Статья 1';
        $post->content = 'Контент 1';
        $post->save();
        return view('home');*/
        //$data = Post::all();
        
        /*$data = Post::limit('id', '<', '3')->select('title')->get();
        dd($data);
        
        return view('home');*/

        /*$data = Country::find('AGO');
        dd($data);
        return view('home');*/
        //Post::create(['title'=> 'Пост 5', 'content' => 'Content 5']);
        
        //Post::destroy(5);
        //return view('home');

        /*$query = DB::insert("INSERT INTO posts(title, content, created_at, updated_at)
        VALUES (?,?,?,?)", ['Пост 1','Lorem', NOW(), NOW()]);
        

        DB::update("UPDATE posts SET created_at = ? WHERE created_at IS NULL OR updated_at IS NULL
        [NOW(),NOW()]");

        $posts = DB::select("SELECT * FROM posts");
        return $posts;*/
        //$res = 2 + 3;
        //$name = 'Name';
        //return view('home', compact('res', 'name'));

        //$data = db::table('country')->get();
        //$data = DB::table('country')->limit(5)->get();
        //$data = DB::table('country')->delect('Code', 'Name')->limit(5)->get();
        //$data = DB::table('country')->delect('Code', 'Name')->limit(5);
        //$data = DB::table('country')->delect('Code', 'Name')->orderBy('Code', 'desc')->first();
        //$data = DB::table('City')->select('IQ', 'Name')->find(2);
        //$data = DB::table('City')->select('IQ', 'Name')->where([['id', '>', 7],['id', '<', 6],])->get();
        //$data = DB::table('City')->where('id', '<', 5)->value('Name');
        //$data = DB::table('country')->where('id', '<', 5)->pluck('Name', 'Code');
        //$data = DB::table('City')->get();
        //$data = DB::table('City')->select('CountryCode')->distinct()->get();

        /*$data = DB::table('city')->select('city.ID', 'city.Name', 'country.Code', 'Country.Name as countryname')->limit(10)
        ->join('country', 'city.CountriCode', 'country.Code')->get();

        dd($data);*/
        //$datas = DB::table('country')->select('Code', 'Name')->limit(5)->get();
        //return view('home', compact('datas'));

        /*
        * @return\Illuminate\Http\Response
        */