(function () {
    var a, b;
    (b = (function () {
        return (
            window.requestAnimationFrame ||
            window.webkitRequestAnimationFrame ||
            window.mozRequestAnimationFrame ||
            function (a) {
                return window.setTimeout(a, 1e3 / 30);
            }
        );
    })()),
        (window.Graphemescope = a = (function () {
            function a(a) {
                var c = this;
                (this.parentElement = null != a ? a : window.document.body),
                    (this.enabled = !0),
                    (this.radiusFactor = 1),
                    (this.zoomFactor = 1),
                    (this.angleFactor = 0),
                    (this.zoomTarget = 1.2),
                    (this.angleTarget = 0.8),
                    (this.easeEnabled = !0),
                    (this.ease = 0.1),
                    null == this.domElement && (this.domElement = document.createElement("canvas")),
                    null == this.ctx && (this.ctx = this.domElement.getContext("2d")),
                    (this.alphaFactor = 1),
                    (this.alphaTarget = 1),
                    this.parentElement.appendChild(this.domElement),
                    (this.oldResizeHandler = function () {}),
                    null !== window.onresize && (this.oldResizeHandler = window.onresize),
                    (window.onresize = function () {
                        return c.resizeHandler();
                    }),
                    this.resizeHandler(),
                    b(function () {
                        return c.animationFrame();
                    });
            }
            return (
                (a.prototype.animationFrame = function () {
                    var a = this;
                    return (
                        b(function () {
                            return a.animationFrame();
                        }),
                        this.enabled ? (this.update(), this.draw()) : void 0
                    );
                }),
                (a.prototype.resizeHandler = function () {
                    return (
                        (this.width = this.domElement.width = this.parentElement.offsetWidth),
                        (this.height = this.domElement.height = this.parentElement.offsetHeight),
                        (this.radius = 0.5 * this.radiusFactor * Math.min(this.width, this.height)),
                        (this.radiusHeight = 0.5 * Math.sqrt(3) * this.radius),
                        this.oldResizeHandler()
                    );
                }),
                (a.prototype.update = function () {
                    return this.easeEnabled
                        ? ((this.angleFactor += (this.angleTarget - this.angleFactor) * this.ease),
                          (this.zoomFactor += (this.zoomTarget - this.zoomFactor) * this.ease),
                          (this.alphaFactor += (this.alphaTarget - this.alphaFactor) * this.ease))
                        : ((this.angleFactor = this.angleTarget), (this.zoomFactor = this.zoomTarget), (this.alphaFactor = this.alphaTarget));
                }),
                (a.prototype.drawImage = function (a) {
                    var b, c;
                    return (
                        this.ctx.save(),
                        (b = (2 / 3) * this.radiusHeight),
                        (c = (this.zoomFactor * b) / (0.5 * Math.min(a.width, a.height))),
                        this.ctx.translate(0, b),
                        this.ctx.scale(c, c),
                        this.ctx.rotate(2 * this.angleFactor * Math.PI),
                        this.ctx.translate(-0.5 * a.width, -0.5 * a.height),
                        this.ctx.fill(),
                        this.ctx.restore()
                    );
                }),
                (a.prototype.drawCell = function (a) {
                    var b, c, d;
                    for (d = [], b = c = 0; 6 > c; b = ++c)
                        this.ctx.save(),
                            this.ctx.rotate((2 * b * Math.PI) / 6),
                            this.ctx.scale([-1, 1][b % 2], 1),
                            this.ctx.beginPath(),
                            this.ctx.moveTo(0, 0),
                            this.ctx.lineTo(-0.5 * this.radius, 1 * this.radiusHeight),
                            this.ctx.lineTo(0.5 * this.radius, 1 * this.radiusHeight),
                            this.ctx.closePath(),
                            this.drawImage(a),
                            d.push(this.ctx.restore());
                    return d;
                }),
                (a.prototype.drawLayer = function (a) {
                    var b, c, d, e, f, g, h, i, j, k, l, m;
                    for (
                        this.ctx.save(),
                            this.ctx.translate(0.5 * this.width, 0.5 * this.height),
                            f = Math.ceil((0.5 * this.height) / this.radiusHeight),
                            c = Math.ceil((0.5 * this.width) / (3 * this.radius)),
                            d = function () {
                                l = [];
                                for (var a = -c; c >= -c ? c >= a : a >= c; c >= -c ? a++ : a--) l.push(a);
                                return l;
                            }.apply(this),
                            g = function () {
                                m = [];
                                for (var a = -f; f >= -f ? f >= a : a >= f; f >= -f ? a++ : a--) m.push(a);
                                return m;
                            }.apply(this),
                            h = 0,
                            j = g.length;
                        j > h;
                        h++
                    ) {
                        for (e = g[h], this.ctx.save(), this.ctx.translate(0, this.radiusHeight * e), Math.abs(e) % 2 && this.ctx.translate(1.5 * this.radius, 0), i = 0, k = d.length; k > i; i++)
                            (b = d[i]), this.ctx.save(), this.ctx.translate(3 * b * this.radius, 0), this.drawCell(a), this.ctx.restore();
                        this.ctx.restore();
                    }
                    return this.ctx.restore();
                }),
                (a.prototype.draw = function () {
                    return (
                        null != this.imageProxy && ((this.ctx.fillStyle = this.patternProxy), (this.ctx.globalAlpha = 1 - this.alphaFactor), this.drawLayer(this.imageProxy)),
                        null != this.image ? ((this.ctx.fillStyle = this.pattern), (this.ctx.globalAlpha = this.alphaFactor), this.drawLayer(this.image)) : void 0
                    );
                }),
                (a.prototype.setImageDirect = function (a) {
                    return null != this.image && ((this.imageProxy = this.image), (this.patternProxy = this.pattern)), (this.image = a), (this.pattern = this.ctx.createPattern(this.image, "repeat")), (this.alphaFactor = 0);
                }),
                (a.prototype.setImage = function (a) {
                    var b,
                        c = this;
                    return "string" == typeof a
                        ? ((b = new Image()),
                          (b.src = a),
                          (b.onload = function () {
                              return c.setImageDirect(b);
                          }))
                        : this.setImageDirect(a);
                }),
                a
            );
        })());
}.call(this));
