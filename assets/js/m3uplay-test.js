(function ($) {

    var manifest = `#EXTM3U
#EXTINF:-1 tvg-logo="https://lh3.googleusercontent.com/-Y39xxVnyC-s/YGO9nUlOTfI/AAAAAAABBEA/Ibwzbtm-67UtK78dc75JoB1OPmUHFnh5ACK8BGAsYHg/s512/2021-03-30.png", Anime Zone TV
http://azxtv.com/hls/stream.m3u8`
    

    var parser = new m3u8Parser.Parser();

    parser.push(manifest);
    parser.end();

    var parsedManifest = parser.manifest;

    var player = $('.container #video_player #video')[0]
    var playerSource = $('.container #video_player #video source')[0]
    var current = 0;
    var total = parsedManifest.segments.length
    $('#play_prev').click(function(){
        player.pause()
        if (current===0) {
            current = total-1
        }
        playerSource.setAttribute('src', parsedManifest.segments[current].uri); 
        player.load()
        player.play()
    })
    $('#play_next').click(function(){
        player.pause()
        if (current===total-1) {
            current = 0
        }
        playerSource.setAttribute('src', parsedManifest.segments[current].uri); 
        player.load()
        player.play()
    })
})(jQuery);
