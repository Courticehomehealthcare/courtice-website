<!DOCTYPE html>
<html lang="en">
<x-head css='{!! isset($css) ? $css : "" !!}' :seo="isset($seo) ? $seo : null"/>
<body class="{{ isset($bodyClass) ? $bodyClass . ' custom-cursor' : 'custom-cursor' }}">
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>
    <div class="page-wrapper">
        
        <x-headerStyleThree/>
    @yield('content')
    
    <x-loader/>
   <x-scripts/>
</body>
</html>