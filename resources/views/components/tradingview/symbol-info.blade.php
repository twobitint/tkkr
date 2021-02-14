@props(['stock' => null])

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-info.js" async>
  {
  "symbol": "{{ $stock->symbol }}",
  "width": "100%",
  "locale": "en",
  "colorTheme": "light",
  "isTransparent": true
}
  </script>
</div>
<!-- TradingView Widget END -->
