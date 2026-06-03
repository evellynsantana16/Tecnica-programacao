import React from "react";


export default function CosmicAstralMap() {

  const signs = {
    Aries: {
      moon: "Escorpião",
      energy: 91,
      aura: "Intensa",
      text: "Você transforma sentimentos em tempestades silenciosas e carrega uma energia impossível de ignorar."
    },

    Touro: {
      moon: "Touro",
      energy: 76,
      aura: "Sensível",
      text: "Seu universo interior é calmo, profundo e cheio de beleza escondida."
    },

    Gemeos: {
      moon: "Aquário",
      energy: 88,
      aura: "Magnética",
      text: "Sua mente parece viajar por galáxias diferentes ao mesmo tempo."
    },

    Cancer: {
      moon: "Peixes",
      energy: 95,
      aura: "Sonhadora",
      text: "Você sente tudo com intensidade cósmica e transforma emoções em arte."
    },

    Leao: {
      moon: "Leão",
      energy: 98,
      aura: "Solar",
      text: "Sua presença ilumina ambientes como uma estrela gigante em expansão."
    },

    Virgem: {
      moon: "Capricórnio",
      energy: 72,
      aura: "Misteriosa",
      text: "Existe perfeição até nas partes silenciosas da sua alma."
    },

    Libra: {
      moon: "Libra",
      energy: 85,
      aura: "Encantadora",
      text: "Você transforma equilíbrio em algo elegante e quase mágico."
    },

    Escorpiao: {
      moon: "Escorpião",
      energy: 99,
      aura: "Hipnótica",
      text: "Seu olhar parece esconder constelações inteiras."
    },

    Sagitario: {
      moon: "Sagitário",
      energy: 83,
      aura: "Livre",
      text: "Sua alma nasceu para explorar mundos além do horizonte."
    },

    Capricornio: {
      moon: "Virgem",
      energy: 70,
      aura: "Elegante",
      text: "Você possui uma força silenciosa que poucos conseguem compreender."
    },

    Aquario: {
      moon: "Aquário",
      energy: 94,
      aura: "Cósmica",
      text: "Sua mente parece conectada diretamente ao universo."
    },

    Peixes: {
      moon: "Peixes",
      energy: 97,
      aura: "Etérea",
      text: "Você vive entre sonhos, estrelas e emoções profundas."
    }
  };

  const [name, setName] = React.useState("");
  const [sign, setSign] = React.useState("Cancer");
  const [result, setResult] = React.useState(null);

  function generateMap() {
    setResult({
      name,
      ...signs[sign]
    });
  }

  return (
    <div className="min-h-screen bg-black text-white overflow-hidden relative flex items-center justify-center p-6">

      <div className="absolute inset-0">

        <div className="absolute top-10 left-20 w-2 h-2 bg-white rounded-full animate-pulse"></div>
        <div className="absolute top-40 right-32 w-1 h-1 bg-white rounded-full animate-ping"></div>
        <div className="absolute bottom-24 left-40 w-2 h-2 bg-purple-300 rounded-full animate-pulse"></div>
        <div className="absolute top-1/2 right-20 w-1 h-1 bg-pink-300 rounded-full animate-ping"></div>

        <div className="absolute -top-20 -left-20 w-96 h-96 bg-purple-700 opacity-30 blur-3xl rounded-full"></div>

        <div className="absolute bottom-0 right-0 w-96 h-96 bg-blue-700 opacity-20 blur-3xl rounded-full"></div>

      </div>

      <div className="relative z-10 w-full max-w-2xl backdrop-blur-xl bg-white/10 border border-white/20 rounded-3xl shadow-2xl p-8">

        <h1 className="text-5xl font-bold text-center mb-3 bg-gradient-to-r from-pink-300 to-purple-400 bg-clip-text text-transparent">

          ✨ Cosmic Map ✨

        </h1>

        <p className="text-center text-gray-300 mb-10 text-lg">
          descubra sua energia astral aesthetic 🌌
        </p>

        <div className="space-y-5">

          <input
            type="text"
            placeholder="Seu nome..."
            value={name}
            onChange={(e) => setName(e.target.value)}
            className="w-full p-4 rounded-2xl bg-black/40 border border-purple-400/30 focus:outline-none"
          />

          <select
            value={sign}
            onChange={(e) => setSign(e.target.value)}
            className="w-full p-4 rounded-2xl bg-black/40 border border-purple-400/30 focus:outline-none"
          >

            {Object.keys(signs).map((item) => (
              <option key={item} value={item} className="bg-black">
                {item}
              </option>
            ))}

          </select>

          <button
            onClick={generateMap}
            className="w-full p-4 rounded-2xl bg-gradient-to-r from-purple-500 to-pink-500 text-lg font-semibold hover:scale-[1.02] transition-all duration-300"
          >

            Gerar mapa astral ✨

          </button>

        </div>

        {result && (

          <div className="mt-10 bg-black/30 border border-white/10 rounded-3xl p-8">

            <h2 className="text-4xl font-bold mb-6 text-center text-pink-300">

              🌙 Mapa Astral de {result.name || "alma cósmica"}

            </h2>

            <div className="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">

              <div className="bg-white/5 rounded-2xl p-5 text-center">

                <p className="text-sm text-gray-400">
                  Lua em
                </p>

                <h3 className="text-2xl font-bold mt-2">
                  {result.moon}
                </h3>

              </div>

              <div className="bg-white/5 rounded-2xl p-5 text-center">

                <p className="text-sm text-gray-400">
                  Energia
                </p>

                <h3 className="text-2xl font-bold mt-2">
                  {result.energy}%
                </h3>

              </div>

              <div className="bg-white/5 rounded-2xl p-5 text-center">

                <p className="text-sm text-gray-400">
                  Aura
                </p>

                <h3 className="text-2xl font-bold mt-2">
                  {result.aura}
                </h3>

              </div>

            </div>

            <div className="bg-gradient-to-r from-purple-500/20 to-pink-500/20 rounded-2xl p-6 border border-purple-300/20">

              <p className="text-xl text-center leading-relaxed italic text-gray-100">

                “{result.text}”

              </p>

            </div>

            <div className="flex justify-center mt-8 gap-6 text-4xl">

              <span>🪐</span>
              <span>✨</span>
              <span>🌙</span>

            </div>

          </div>

        )}

      </div>

    </div>
  );
}