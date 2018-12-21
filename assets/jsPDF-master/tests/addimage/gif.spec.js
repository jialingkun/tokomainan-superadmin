
/* global describe, it, jsPDF, comparePdf, expect */
/**
 * Standard spec tests
 */

describe('Plugin: addimage', () => {

	  it('gif89a', () => {
		  var gif89a = 'data:image/gif;base64,R0lGODlhyABGALMAAP///wAAAIiIiN3d3ZmZmSIiIkRERBEREe7u7ru7u3d3d2ZmZszMzKqqqlVVVTMzMyH/C1hNUCBEYXRhWE1QPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS4wLWMwNjAgNjEuMTM0MzQyLCAyMDEwLzAxLzEwLTE4OjA2OjQzICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjFDNzVCQUZERjZGNDExRTdCNzJEQjRCQ0RBRDRENzQ3IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjFDNzVCQUZFRjZGNDExRTdCNzJEQjRCQ0RBRDRENzQ3Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MUM3NUJBRkJGNkY0MTFFN0I3MkRCNEJDREFENEQ3NDciIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MUM3NUJBRkNGNkY0MTFFN0I3MkRCNEJDREFENEQ3NDciLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4B//79/Pv6+fj39vX08/Lx8O/u7ezr6uno5+bl5OPi4eDf3t3c29rZ2NfW1dTT0tHQz87NzMvKycjHxsXEw8LBwL++vby7urm4t7a1tLOysbCvrq2sq6qpqKempaSjoqGgn56dnJuamZiXlpWUk5KRkI+OjYyLiomIh4aFhIOCgYB/fn18e3p5eHd2dXRzcnFwb25tbGtqaWhnZmVkY2JhYF9eXVxbWllYV1ZVVFNSUVBPTk1MS0pJSEdGRURDQkFAPz49PDs6OTg3NjU0MzIxMC8uLSwrKikoJyYlJCMiISAfHh0cGxoZGBcWFRQTEhEQDw4NDAsKCQgHBgUEAwIBAAAh+QQAAAAAACwAAAAAyABGAAAE/xDISau9OOvNu/9gKI5kaZ5oqq5s675wLM90bd94ru987//AoHBILBqPyKRyyWw6n9CodEqtWq/YrHbL7Xq/4LB4TC6bzxmCoBBotxcCBhMhMLgDBgGCQ7e3D3FoGAJ3hW6AexMJhoUDEwOMkW0EIYSSAhqWjA6JggANB5KMmBKLoo4SkKKGlB9+ogYYr5EPnWcEhQIJFGqhbguKq6gAqqt3rR0Ld3qpCncKFs5/pAACvgEPgrhunGlsAcAWmsgUxQUspgEHchXpAcMA6QXwxN8B5GPFAdSZ4BfjF8yxkLYPA0F+r3ZZkHfmlYMPCcJVAGhB4IoHbthZYPBrAsc22f9kuWlQJt0BWyQoVrCowh69Rx0laIKGYVsAmhQE1CkEiOQUZW34lVBZzs25iyMxfLw5Aei9DMVCpjJm4CWTa1ZFEIXZ5qgKB26kTkwqAewkDb4OFDU2D8pSsSa2Tu2K7s5DC368AjD7NIO9TqoAKZRpT2KTmSrkEjPawmmAAuRs+pTgVGgFjG2GDTAwuQKCv08OJnaDb+5jF3y7YmrgRqimuyLbDOagqfMSp6VTkg5o7E6sEDYNHbANYOmBrAAwB5i9YanlJAlHn63Y281vEJoMOdBI4RVcRde4byj2HMkr4hJmFbqeczf16nhAIMA8r4H6ghWWYkPWpxEGOjrdV97/EbjFxgh7EyjGkgr0aUbQGxYEZ4wFdFwTyYBGiHbBfdb9495KjK1QW0WzlAZKJAcQkFYFEl7yBGIedCjOh2udpgICvuhVgVM6JjiLA5ggwE17uegkB3lPsAbSBzKONR2IdKmgJFP/hQfCUjjp8wBziwX1hJBuIFdBk0T2BaWNKWiC4XnYkVVNWBgg+QRfGFJAZoI0coUmCpVpUKArf3SXUZytQTHlSR3cKVOepvU4lBs4XcAXeoRCOIE9UBUKhT2waaDom0/W6CgJU44qwTUoacAXPJhWit8T7tQJwKcKhpgCmKFSMCWC/Vg6wSviTUCnFA92kwGtjHa5J5+HcMnAszVcGmQUSjCWM4usBBaigG1qKMcrqGaKysJnz6BCxzMLGcDfGoe8hOMv5mbn5RTyGkONO4xoZqsKzxpjWDCSPJBVvXcAoukUDKQWSQHMACyJvlGyMIDCheQWjySRenjgAHJaoZOFNzXcjjB6mnoCAwIoFwCQGgygcsgeMPDgAgp17MnNOOes88489+zzz0AHLfTQRBdt9NFIJ6300kw37fTTUEct9dRUV2311VhnrfXWSUcAADs=';
    
	    const doc = new jsPDF('p', 'pt', 'a4', false);
		  doc.addImage(gif89a, 'GIF89A', 100, 200, 200, 70, undefined, undefined);
	    
	    comparePdf(doc.output(), 'gif.pdf', 'addimage');
	  })
})
