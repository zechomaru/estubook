$(document).ready(function(){
    $('#searchbox').selectize({
        valueField: 'url',
            labelField: 'name',
            searchField: 'name',
            maxOptions: 10,
            create: false,
            render: {
                option: function(item, escape) {
                    return '<div>' +
                         escape(item.name) +
                            
                    '</div>';
                }
            },
            load: function(query, callback) {
                if (!query.length) return callback();
                $.ajax({
                    url: root+ '/api/search/' + encodeURIComponent(query),
                    type: 'GET',
                    error: function() {
                        callback();
                    },
                    success: function(res) {
                       callback(res.data);
                    }
                });
            },
            onChange: function(){
                        window.location = this.items[0];
                    }
        });
});