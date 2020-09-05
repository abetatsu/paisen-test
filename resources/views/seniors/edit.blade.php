@extends('layouts.app')

@section('content')
<form class="col-sm-6 mx-auto" enctype="multipart/form-data">
     <div class="form-group">
          <label for="image">プロフィール画像を選択してください</label>
          <input type="file" class="form-control-file" id="image">
     </div>
     <div class="form-group">
          <label for="name">名前またはニックネーム</label>
          <input type="text" class="form-control" id="name" name="name" value="{{ $senior->name }}">
     </div>
     <div class="form-group">
          <label for="age">年齢</label>
          <select class="form-control" id="age" name="age">
               @if(!empty($senior->age))
               <option value="{{ $senior->age }}" selected>{{ $senior->age }}</option>
               @else
               <option value="">選択してください</option>
               @endif
               <option value="40">40</option>
               <option value="41">41</option>
               <option value="42">42</option>
               <option value="43">43</option>
               <option value="44">44</option>
               <option value="45">45</option>
               <option value="46">46</option>
               <option value="47">47</option>
               <option value="48">48</option>
               <option value="49">49</option>
               <option value="50">50</option>
               <option value="51">51</option>
               <option value="52">52</option>
               <option value="53">53</option>
               <option value="54">54</option>
               <option value="55">55</option>
               <option value="56">56</option>
               <option value="57">57</option>
               <option value="58">58</option>
               <option value="59">59</option>
               <option value="60">60</option>
               <option value="61">61</option>
               <option value="62">62</option>
               <option value="63">63</option>
               <option value="64">64</option>
               <option value="65">65</option>
               <option value="66">66</option>
               <option value="67">67</option>
               <option value="68">68</option>
               <option value="69">69</option>
               <option value="70">70</option>
               <option value="71">71</option>
               <option value="72">72</option>
               <option value="73">73</option>
               <option value="74">74</option>
               <option value="75">75</option>
               <option value="76">76</option>
               <option value="77">77</option>
               <option value="78">78</option>
               <option value="79">79</option>
               <option value="80">80</option>
               <option value="81">81</option>
               <option value="82">82</option>
               <option value="83">83</option>
               <option value="84">84</option>
               <option value="85">85</option>
               <option value="86">86</option>
               <option value="87">87</option>
               <option value="88">88</option>
               <option value="89">89</option>
               <option value="90">90</option>
               <option value="91">91</option>
               <option value="92">92</option>
               <option value="93">93</option>
               <option value="94">94</option>
               <option value="95">95</option>
               <option value="96">96</option>
               <option value="97">97</option>
               <option value="98">98</option>
               <option value="99">99</option>
               <option value="100">100</option>
               <option value="101">101</option>
               <option value="102">102</option>
               <option value="103">103</option>
               <option value="104">104</option>
               <option value="105">105</option>
               <option value="106">106</option>
               <option value="107">107</option>
               <option value="108">108</option>
               <option value="109">109</option>
               <option value="110">110</option>
          </select>
     </div>
     <div class="form-group">
          <label for="home_country">出身</label>
          <select class="form-control" id="home_country" name="home_country">
               @if(!empty($senior->home_country))
               <option value="{{ $senior->home_country }}" selected>{{ $senior->home_country }}</option>
               @else
               <option value="">選択してください</option>
               @endif
               <option value="北海道">北海道</option>
               <option value="青森県">青森県</option>
               <option value="岩手県">岩手県</option>
               <option value="宮城県">宮城県</option>
               <option value="秋田県">秋田県</option>
               <option value="山形県">山形県</option>
               <option value="福島県">福島県</option>
               <option value="茨城県">茨城県</option>
               <option value="栃木県">栃木県</option>
               <option value="群馬県">群馬県</option>
               <option value="埼玉県">埼玉県</option>
               <option value="千葉県">千葉県</option>
               <option value="東京都">東京都</option>
               <option value="神奈川県">神奈川県</option>
               <option value="新潟県">新潟県</option>
               <option value="富山県">富山県</option>
               <option value="石川県">石川県</option>
               <option value="福井県">福井県</option>
               <option value="山梨県">山梨県</option>
               <option value="長野県">長野県</option>
               <option value="岐阜県">岐阜県</option>
               <option value="静岡県">静岡県</option>
               <option value="愛知県">愛知県</option>
               <option value="三重県">三重県</option>
               <option value="滋賀県">滋賀県</option>
               <option value="京都府">京都府</option>
               <option value="大阪府">大阪府</option>
               <option value="兵庫県">兵庫県</option>
               <option value="奈良県">奈良県</option>
               <option value="和歌山県">和歌山県</option>
               <option value="鳥取県">鳥取県</option>
               <option value="島根県">島根県</option>
               <option value="岡山県">岡山県</option>
               <option value="広島県">広島県</option>
               <option value="山口県">山口県</option>
               <option value="徳島県">徳島県</option>
               <option value="香川県">香川県</option>
               <option value="愛媛県">愛媛県</option>
               <option value="高知県">高知県</option>
               <option value="福岡県">福岡県</option>
               <option value="佐賀県">佐賀県</option>
               <option value="長崎県">長崎県</option>
               <option value="熊本県">熊本県</option>
               <option value="大分県">大分県</option>
               <option value="宮崎県">宮崎県</option>
               <option value="鹿児島県">鹿児島県</option>
               <option value="沖縄県">沖縄県</option>
               <option value="海外">海外</option>
          </select>
     </div>
     <div class="form-group">
          <label for="previous_job">前職</label>
          <select class="form-control" id="previous_job" name="previous_job">
               @if(!empty($senior->previous_job))
               <option value="{{ $senior->previous_job }}" selected>{{ $senior->previous_job }}</option>
               @else
               <option value="">選択してください</option>
               @endif
               <option value="製造業">製造業</option>
               <option value="建築業">建築業</option>
               <option value="設備業">設備業</option>
               <option value="運輸業">運輸業</option>
               <option value="流通業">流通業</option>
               <option value="農林水産業">農林水産業</option>
               <option value="印刷・出版業">印刷・出版業</option>
               <option value="金融業・保険業">金融業・保険業</option>
               <option value="不動産業">不動産業</option>
               <option value="IT・情報通信業">IT・情報通信業</option>
               <option value="サービス業">サービス業</option>
               <option value="教育・研究機関">教育・研究機関</option>
               <option value="病院・医療機関">病院・医療機関</option>
               <option value="官公庁・自治体">官公庁・自治体</option>
               <option value="法人団体">法人団体</option>
               <option value="その他の業種">その他の業種</option>
          </select>
     </div>
     <div class="form-group">
          <label for="hobby">趣味・特技</label>
          <input type="text" class="form-control" id="hobby" name="hobby" value="{{ $senior->hobby }}">
     </div>
     <div class="form-group">
          <label for="message">一言</label>
          <textarea class="form-control" id="message" name="message" rows="3">{{ $senior->message }}</textarea>
     </div>
     <input type="submit" value="登録する" class="btn btn-primary">
</form>
<div class="text-center">
     <a href="{{ route('seniors.index') }}" class="btn btn-primary d-inline-block">一覧に戻る</a>
</div>
@endsection