import svgPaths from "../imports/svg-fy4o5hbif4";
import logoSvgPaths from "../imports/svg-d8ad3nattj";

interface FooterProps {
  onNavigate?: (page: string) => void;
}

export function Footer({ onNavigate }: FooterProps = {}) {
  const handleNavClick = (e: React.MouseEvent<HTMLAnchorElement>, page?: string) => {
    if (page && onNavigate) {
      e.preventDefault();
      onNavigate(page);
    }
  };

  return (
    <footer className="bg-black border-t border-[rgba(208,135,0,0.2)]">
      {/* Main Footer Content */}
      <div className="container mx-auto px-4 lg:px-[87px] py-[34px]">
        <div className="flex flex-col lg:flex-row items-start justify-between gap-8 lg:gap-12 mb-[35px]">
          {/* Brand + Social */}
          <div className="flex flex-col gap-4 items-center w-full lg:w-auto">
            {/* Logo YesMoreBet */}
            <div className="flex flex-col gap-[3px] items-center w-[123px]">
              <svg className="w-[76.452px] h-[17.58px]" fill="none" preserveAspectRatio="none" viewBox="0 0 77 18">
                <path d={logoSvgPaths.p26ff8f00} fill="#FDC700" />
                <path d={logoSvgPaths.p7e77700} fill="#FDC700" />
                <path d={logoSvgPaths.p143c1000} fill="#FDC700" />
                <path d={logoSvgPaths.p7356580} fill="#FDC700" />
              </svg>
              <svg className="w-[115.824px] h-[15.44px]" fill="none" preserveAspectRatio="none" viewBox="0 0 116 16">
                <path d={logoSvgPaths.p11474900} fill="#FDC700" />
                <path d={logoSvgPaths.p2330dde0} fill="#FDC700" />
                <path d={logoSvgPaths.p1bdb400} fill="#FDC700" />
                <path d={logoSvgPaths.p278d9180} fill="#FDC700" />
                <path d={logoSvgPaths.p2a25380} fill="#FDC700" />
                <path d={logoSvgPaths.p32d7b00} fill="#FDC700" />
                <path d={logoSvgPaths.p361f6100} fill="#FDC700" />
                <path d={logoSvgPaths.p2ce37f00} fill="#FDC700" />
                <path d={logoSvgPaths.p270c2b00} fill="#FDC700" />
                <path d={logoSvgPaths.p36946200} fill="#FDC700" />
              </svg>
            </div>

            {/* Social Links */}
            <div className="flex gap-3">
              <a
                href="https://instagram.com"
                target="_blank"
                rel="noopener noreferrer"
                className="flex items-center justify-center size-10 bg-[rgba(255,255,255,0.05)] hover:bg-[rgba(255,255,255,0.1)] rounded-[10px] border border-[rgba(255,255,255,0.1)] transition-all"
                aria-label="Instagram"
              >
                <svg className="size-[18px]" fill="none" viewBox="0 0 18 18">
                  <path d={logoSvgPaths.p299a6200} stroke="#99A1AF" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.5" />
                  <path d={logoSvgPaths.p3cad6d80} stroke="#99A1AF" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.5" />
                  <path d="M13.125 4.875H13.1325" stroke="#99A1AF" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.5" />
                </svg>
              </a>
              <a
                href="https://facebook.com"
                target="_blank"
                rel="noopener noreferrer"
                className="flex items-center justify-center size-10 bg-[rgba(255,255,255,0.05)] hover:bg-[rgba(255,255,255,0.1)] rounded-[10px] border border-[rgba(255,255,255,0.1)] transition-all"
                aria-label="Facebook"
              >
                <svg className="size-[18px]" fill="none" viewBox="0 0 18 18">
                  <path d={logoSvgPaths.p3c358280} stroke="#99A1AF" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.5" />
                </svg>
              </a>
            </div>
          </div>

          {/* Informations légales */}
          <div className="flex flex-col gap-4 w-full lg:w-[171px]">
            <h3 className="font-['Quicksand'] text-white">Informations légales</h3>
            <ul className="flex flex-col gap-2">
              <li>
                <a 
                  href="/mentions-legales" 
                  className="font-['Quicksand'] text-sm text-[#99a1af] hover:text-[#fdc700] transition-colors"
                  onClick={(e) => handleNavClick(e, 'mentions-legales')}
                >
                  Mentions légales
                </a>
              </li>
              <li>
                <a 
                  href="/politique-confidentialite" 
                  className="font-['Quicksand'] text-sm text-[#99a1af] hover:text-[#fdc700] transition-colors"
                  onClick={(e) => handleNavClick(e, 'politique-confidentialite')}
                >
                  Politique de confidentialité
                </a>
              </li>
              <li>
                <a 
                  href="/cgv" 
                  className="font-['Quicksand'] text-sm text-[#99a1af] hover:text-[#fdc700] transition-colors"
                  onClick={(e) => handleNavClick(e, 'cgv')}
                >
                  CGV
                </a>
              </li>
            </ul>
          </div>

          {/* Contact */}
          <div className="flex flex-col gap-4 w-full lg:w-[224px]">
            <h3 className="font-['Quicksand'] text-white">Contact</h3>
            <ul className="flex flex-col gap-3">
              <li className="flex items-center gap-3">
                <svg className="size-4 flex-shrink-0" fill="none" viewBox="0 0 16 16">
                  <path d={svgPaths.p2f8e7e80} stroke="#FDC700" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.33333" />
                  <path d={svgPaths.p17070980} stroke="#FDC700" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.33333" />
                </svg>
                <a href="mailto:contact@yesmorebet.fr" className="font-['Quicksand'] text-sm text-[#99a1af] hover:text-[#fdc700] transition-colors">
                  contact@yesmorebet.fr
                </a>
              </li>
              <li className="flex items-center gap-3">
                <svg className="size-4 flex-shrink-0" fill="none" viewBox="0 0 16 16">
                  <path d={svgPaths.p26187580} stroke="#FDC700" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.33333" />
                </svg>
                <a href="tel:+33626512217" className="font-['Quicksand'] text-sm text-[#99a1af] hover:text-[#fdc700] transition-colors">
                  +33 6 26 51 22 17
                </a>
              </li>
              <li className="flex gap-3">
                <svg className="size-4 flex-shrink-0 mt-[2px]" fill="none" viewBox="0 0 16 16">
                  <path d={svgPaths.p14548f00} stroke="#FDC700" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.33333" />
                  <path d={svgPaths.p17781bc0} stroke="#FDC700" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1.33333" />
                </svg>
                <span className="font-['Quicksand'] text-sm text-[#99a1af]">
                  Grasse, Cannes, Antibes, Nice et région Sud
                </span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      {/* Bottom Bar */}
      <div className="border-t border-[rgba(208,135,0,0.2)]">
        <div className="container mx-auto px-[27.5px] py-[25px]">
          <div className="flex flex-col gap-4 items-center">
            <p className="font-['Quicksand'] text-sm text-[#99a1af] text-center">
              © 2025 YesMoreBet. Tous droits réservés. • Fait avec ❤️ sur la Côte d'Azur
            </p>
            <p className="font-['Quicksand'] text-sm text-[#99a1af] text-center">
              Animation de casino fictif 100% légale et sans argent réel
            </p>
          </div>
        </div>
      </div>
    </footer>
  );
}
