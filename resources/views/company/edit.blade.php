@extends('layouts.comp')
{{--店の登録情報更新--}}

{{--一つ前の画面へ戻る--}}
<INPUT border="1" type="button" onclick="history.back()" class="disp-img2">

@section('content')
{{--更新情報表示--}}
  <form action="/company/edit" method="post">
  <div class="table">
  <table>

      @csrf

      {{--serial_numberで区別--}}
      <input type="hidden" name="serial_number" value="{{$form->serial_number}}">
{{--店名--}}
      {{--エラーメッセージ--}}
    @error('store_name')
      <tr><th class="error">&nbsp; ERROR</th>
      <td class="error">&nbsp; {{$message}}</td></tr>
    @enderror

      <tr><th>店名:</th><td><input type="text" name="store_name" value="{{$form->store_name}}"></td></tr>

{{--店情報--}}
      {{--エラーメッセージ--}}
    @error('store_information')
      <tr><th class="error">&nbsp; ERROR</th>
      <td class="error">&nbsp; {{$message}}</td></tr>
    @enderror

      <tr><th>店情報:</th><td><input type="text" name="store_information" value="{{$form->store_information}}"></td></tr>

{{--紹介文--}}
      {{--エラーメッセージ--}}
    @error('store_introduction')
      <tr><th class="error">&nbsp; ERROR</th>
      <td class="error">&nbsp; {{$message}}</td></tr>
    @enderror

      <tr><th>紹介文:</th><td><input type="text" name="store_introduction" value="{{$form->store_introduction}}"></td></tr>

{{--地方(プルダウンで表示)--}}
     <tr><th>地方:</th><td><select name="rural_code" class="parent">

      <option value="{{$form->rural_code}}" hidden>{{$form->rural_code}}</option>

    <optgroup label="北海道地方" style="background-color: lightblue;"></optgroup>
			<option value="北海道" class="Hokkaido">北海道</option>

    <optgroup label="東北地方" style="background-color: lightblue;"></optgroup>
			<option value="青森県" class="aomori">青森県</option>
			<option value="岩手県" class="iwate">岩手県</option>
      <option value='宮城県' class="miyagi"> 宮城県 </option>
      <option value='秋田県' class="akita"> 秋田県 </option> 
      <option value='山形県' class="yamagata"> 山形県 </option>
      <option value='福島県' class="fukushima"> 福島県 </option>

    <optgroup label="関東地方" style="background-color: lightblue;"></optgroup>
      <option value='茨城県' class="ibaraki"> 茨城県 </option>
      <option value='栃木県' class="tochigi"> 栃木県 </option> 
      <option value='群馬県' class="gunnma"> 群馬県 </option> 
      <option value='埼玉県' class="saitama"> 埼玉県 </option> 
      <option value='千葉県' class="chiba"> 千葉県 </option>
      <option value='東京都' class="tokyo"> 東京都 </option> 
      <option value='神奈川県' class="kanagawa"> 神奈川県 </option>

    <optgroup label="中部地方" style="background-color: lightblue;"></optgroup>   
      <option value='新潟県' class="niigata"> 新潟県 </option>
      <option value='富山県' class="toyama"> 富山県 </option>
      <option value='石川県' class="ishikawa"> 石川県 </option>
      <option value='福井県' class="fukui"> 福井県 </option> 
      <option value='山梨県' class="yamagata"> 山梨県 </option> 
      <option value='長野県' class="nagano"> 長野県 </option> 
      <option value='岐阜県' class="gifu"> 岐阜県 </option> 
      <option value='静岡県' class="shizuoka"> 静岡県 </option> 
      <option value='愛知県' class="aichi"> 愛知県 </option>

    <optgroup label="近畿地方" style="background-color: lightblue;"></optgroup> 
      <option value='三重県' class="mie"> 三重県 </option>
      <option value='滋賀県' class="saga"> 滋賀県 </option> 
      <option value='京都府' class="kyoto"> 京都府 </option>
      <option value='大阪府' class="oosaka"> 大阪府 </option> 
      <option value='兵庫県' class="hyougo"> 兵庫県 </option>
      <option value='奈良県' class="nara"> 奈良県 </option>
      <option value='和歌山県' class="wakayama"> 和歌山県 </option>

    <optgroup label="中国地方" style="background-color: lightblue;"></optgroup> 
      <option value='鳥取県' class="tottori"> 鳥取県 </option>
      <option value='島根県' class="shimane"> 島根県 </option>
      <option value='岡山県' class="okayama"> 岡山県 </option>
      <option value='広島県' class="hiroshima"> 広島県 </option>
      <option value='山口県' class="yamaguchi"> 山口県 </option> 
      <option value='徳島県' class="tokushima"> 徳島県 </option>
      <option value='香川県' class="kagawa"> 香川県 </option>
      <option value='愛媛県' class="ehime"> 愛媛県 </option>
      <option value='高知県' class="kouchi"> 高知県 </option>

    <optgroup label="九州地方" style="background-color: lightblue;"></optgroup> 
      <option value='福岡県' class="fukuoka"> 福岡県 </option>
      <option value='佐賀県' class="saga"> 佐賀県 </option>
      <option value='長崎県' class="nagasaki"> 長崎県 </option>
      <option value='熊本県' class="kumamoto"> 熊本県 </option> 
      <option value='大分県' class="ooita"> 大分県 </option>
      <option value='宮崎県' class="miyazaki"> 宮崎県 </option> 
      <option value='鹿児島県' class="kagoshima"> 鹿児島県 </option> 
      <option value='沖縄県' class="okinawa"> 沖縄県 </option>
		
    </select></td></tr>

{{--エリア(プルダウンで表示)--}}
      <tr><th>エリア:</th><td><select name="area" class="children">

      <option value='{{$form->area}}' hidden>{{$form->area}}</option>
      
      <option value="札幌" class="Hokkaido">札幌</option>
			<option value="函館・大沼・前松" class="Hokkaido">函館・大沼・前松</option>
			<option value="稚内・留萌" class="Hokkaido">稚内・留萌</option>
      <option value="旭川" class="Hokkaido">旭川</option>
      <option value="知床・北見" class="Hokkaido">知床・北見</option>
      <option value="阿寒・根室" class="Hokkaido">阿寒・根室</option>
      <option value="十勝" class="Hokkaido">十勝</option>

			<option value="八戸" class="aomori">八戸</option>
      <option value="弘前" class="aomori">弘前</option>
      <option value="青森" class="aomori">青森</option>
      <option value="十和田湖" class="aomori">十和田湖</option>
      <option value="津軽西海岸" class="aomori">津軽西海岸</option>
      <option value="下北・三沢" class="aomori">下北・三沢</option>
      <option value="津軽半島" class="aomori">津軽半島</option>


			<option value="盛岡" class="iwate">盛岡</option>
      <option value="宮古" class="iwate">宮古</option>
      <option value="釜石" class="iwate">釜石</option>

      <option value="仙台" class="miyagi">仙台</option>
      <option value="石巻" class="miyagi">石巻</option>
      <option value="岩沼" class="miyagi">岩沼</option>


      <option value="秋田" class="akita">秋田</option>
      <option value="横手" class="akita">横手</option>
      <option value="能代" class="akita">能代</option>

      <option value="山形" class="yamagata">山形</option>
      <option value="鶴岡" class="yamagata">鶴岡</option>

      <option value="福島" class="fukushima">福島</option>
      <option value="須賀川" class="fukushima">須賀川</option>
      <option value="相馬" class="fukushima">相馬</option>

      <option value='大洗・ひたちなか' class="ibaraki"> 大洗・ひたちなか </option>

      <option value='宇都宮・さくら' class="tochigi"> 宇都宮・さくら </option>
      <option value='日光・霧降高原・奥日光・中禅寺湖・今市' class="tochigi"> 日光・霧降高原・奥日光・中禅寺湖・今市 </option>

      <option value='万座・嬬恋・北軽井沢' class="gunnma"> 万座・嬬恋・北軽井沢 </option>

      <option value='川越・さいたま' class="saitama"> 川越・さいたま </option>

      <option value='舞浜・浦安・船橋・幕張' class="chiba"> 舞浜・浦安・船橋・幕張
      </option>

      <option value='お台場・汐留・新橋・品川' class="tokyo"> お台場・汐留・新橋・品川 </option>

      <option value='横浜' class="kanagawa"> 横浜 </option>

      <option value="新潟・月岡・阿賀野川" class="niigata"> 新潟・月岡・阿賀野川 </option>

      <option value='富山' class="toyama"> 富山 </option>

      <option value='金沢・羽咋' class="ishikawa"> 金沢・羽咋 </option>

      <option value='福井・奥越前' class="fukui"> 福井・奥越前 </option>

      <option value='河口湖・西湖・富士吉田・精進湖・本栖湖' class="yamagata"> 河口湖・西湖・富士吉田・精進湖・本栖湖 </option>

      <option value='長野・戸隠・小布施' class="nagano"> 長野・戸隠・小布施 </option>

      <option value='岐阜・大垣・養老' class="gifu"> 岐阜・大垣・養老 </option>

      <option value='下田・白浜' class="shizuoka"> 下田・白浜 </option>

      <option value='名古屋' class="aichi"> 名古屋 </option>

      <option value='桑名・長島・四日市・湯の山・鈴鹿' class="mie"> 桑名・長島・四日市・湯の山・鈴鹿 </option>

      <option value='彦根・長浜' class="saga"> 彦根・長浜 </option>

      <option value='京都駅周辺' class="kyoto"> 京都駅周辺 </option>

      <option value='新大阪・江坂・十三・塚本' class="oosaka"> 新大阪・江坂・十三・塚本 </option>

      <option value='神戸・有馬・明石' class="hyougo"> 神戸・有馬・明石 </option>

      <option value='奈良・斑鳩・天理' class="nara"> 奈良・斑鳩・天理 </option>

      <option value='和歌山市・加太・和歌浦' class="wakayama"> 和歌山市・加太・和歌浦 </option>

      <option value='米子・皆生・大山' class="tottori"> 米子・皆生・大山 </option>

      <option value='松江・安来・玉造・奥出雲' class="shimane"> 松江・安来・玉造・奥出雲 </option>

      <option value='岡山・玉野・牛窓' class="okayama"> 岡山・玉野・牛窓 </option>

      <option value='広島・宮島' class="hiroshima"> 広島・宮島 </option>

      <option value='下関・宇部' class="yamaguchi"> 下関・宇部 </option>

      <option value='徳島・鳴門' class="tokushima"> 徳島・鳴門 </option>

      <option value='高松・東讃' class="kagawa"> 高松・東讃 </option>

      <option value='松山・道後' class="ehime"> 松山・道後 </option>

      <option value='高知・須崎・南国' class="kouchi"> 高知・須崎・南国 </option>

      <option value='福岡市（博多駅周辺・天神周辺）' class="fukuoka"> 福岡市（博多駅周辺・天神周辺） </option>

      <option value='佐賀・古湯・熊の川' class="saga"> 佐賀・古湯・熊の川 </option>

      <option value='佐世保・ハウステンボス' class="nagasaki"> 佐世保・ハウステンボス </option>

      <option value='熊本' class="kumamoto"> 熊本 </option>

      <option value='別府' class="ooita"> 別府 </option>

      <option value='宮崎・青島・日南' class="miyazaki"> 宮崎・青島・日南 </option>

      <option value='鹿児島・桜島' class="kagoshima"> 鹿児島・桜島 </option>

      <option value='那覇' class="okinawa"> 那覇 </option>
    
    </select></td></tr>

    <script>
      $(function() {
    
        // 県名が変更されたら発動
        $('select[name="rural_code"]').change(function() {
          
          // 選択されている県のクラス名を取得
          var countyName = $('select[name="rural_code"] option:selected').attr("class");
          console.log(countyName);
        })
      })

      $(function() {
        
        // 県名が変更されたら発動
        $('select[name="rural_code"]').change(function() {
          
          // 選択されている県のクラス名を取得
          var countyName = $('select[name="rural_code"] option:selected').attr("class");
          console.log(countyName);
          
          // エリア名の要素数を取得
          var count = $('select[name="area"]').children().length;
          
          // エリア名の要素数分、for文で回す
          for (var i=0; i<count; i++) {
            
            var city = $('select[name="area"] option:eq(' + i + ')');
            
            if(city.attr("class") === countyName) {
              // 選択した県と同じクラス名だった場合
              
              // エリアの要素を表示
              city.show();
            }else {
              // 選択した県とクラス名が違った場合
              
              // エリアの要素を非表示
              city.hide();
            }
          }
        })
      })

      $(function() {
        
        // 県名が変更されたら発動
        $('select[name="rural_code"]').change(function() {
          
          // 選択されている県のクラス名を取得
          var countyName = $('select[name="rural_code"] option:selected').attr("class");
          console.log(countyName);
          
          // エリア名の要素数を取得
          var count = $('select[name="area"]').children().length;
          
          // エリア名の要素数分、for文で回す
          for (var i=0; i<count; i++) {
            
            var city = $('select[name="area"] option:eq(' + i + ')');
            
            if(city.attr("class") === countyName) {
              // 選択した県と同じクラス名だった場合
              
              city.show();
            }else {
              // 選択した県とクラス名が違った場合
              
              if(city.attr("class") === "msg") {
                // 「エリア名を選択して下さい」という要素だった場合
                
                  city.show();  //「エリア名を選択して下さい」を表示させる
                  city.prop('selected',true);  //「エリア名を選択して下さい」を強制的に選択されている状態にする
              } else {
                // 「エリア名を選択して下さい」という要素でなかった場合
                
                city.hide();
              }
            }
          }
        })
      })
    </script>

{{--店の種類(プルダウンで表示)--}}
      <tr><th>店の種類:</th><td><select name="store_stype" class="form-control">
      <option value="{{$form->store_stype}}" hidden>{{$form->store_stype}}</option>
      <option value="飲食店">飲食店</option>
      <option value="宿泊">宿泊</option>
      <option value="観光地">観光地</option>
      </select></td></tr>

{{--リンク--}}
      {{--エラーメッセージ--}}
    @error('url')
      <tr><th class="error">&nbsp; ERROR</th>
      <td class="error">&nbsp; {{$message}}</td></tr>
    @enderror

      <tr><th>URL:</th><td><input type="text" name="url" value="{{$form->url}}"></td></tr>

{{--住所--}}
      {{--エラーメッセージ--}}
    @error('street_address')
      <tr><th class="error">&nbsp; ERROR</th>
      <td class="error">&nbsp; {{$message}}</td></tr>
    @enderror

      <tr><th>住所:</th><td><input type="text" name="street_address" value="{{$form->street_address}}"></td></tr>

{{--更新情報登録--}}      
      <tr><th></th><td><input type="submit" value="更新" class="button"></td></tr>
  </table>
  </div>
  </form>
@endsection