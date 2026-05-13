import React from 'react';
import { Apple, Play } from 'lucide-react';

const Footer = () => {
  return (
    <footer className="pt-12 md:pt-20 lg:pt-32 pb-6 md:pb-8 lg:pb-10 px-4 sm:px-6">
      <div className="max-w-7xl mx-auto">
        <div id="download" className="bg-brand-dark text-white rounded-2xl sm:rounded-3xl lg:rounded-[3rem] p-8 sm:p-12 md:p-20 lg:p-24 text-center mb-8 md:mb-12">
          <h2 className="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-display font-bold tracking-tight mb-4 md:mb-6">Download the app</h2>
          <p className="text-base sm:text-lg md:text-xl lg:text-2xl text-gray-400 max-w-2xl mx-auto mb-8 md:mb-12">
            Lots of people trust ServiceMan to get a quick fix / home service, download ServiceMan today to get started.
          </p>

          <div className="flex flex-col sm:flex-row justify-center gap-4 sm:gap-3 md:gap-4">
            <a href="#" className="flex items-center justify-center gap-2 bg-white text-black px-6 sm:px-8 py-3 sm:py-4 rounded-xl sm:rounded-2xl transition-transform hover:scale-105 font-bold text-sm sm:text-base">
              <Apple size={24} className="sm:w-7 sm:h-7" />
              <div className="flex flex-col text-left">
                <span className="text-[10px] sm:text-[11px] leading-tight opacity-80">Download on the</span>
                <span className="text-sm sm:text-xl leading-none">App Store</span>
              </div>
            </a>
            <a href="#" className="flex items-center justify-center gap-2 bg-[#2A2A2A] text-white px-6 sm:px-8 py-3 sm:py-4 rounded-xl sm:rounded-2xl transition-transform hover:scale-105 font-bold text-sm sm:text-base">
              <Play size={24} className="sm:w-7 sm:h-7" fill="currentColor" />
              <div className="flex flex-col text-left">
                <span className="text-[10px] sm:text-[11px] leading-tight opacity-80">GET IT ON</span>
                <span className="text-sm sm:text-xl leading-none">Google Play</span>
              </div>
            </a>
          </div>
        </div>

        <div className="flex flex-col md:flex-row md:justify-between md:items-center py-4 md:py-6 border-b border-gray-200 gap-4 md:gap-6">
          <div className="flex flex-wrap justify-center md:justify-start gap-4 md:gap-8 font-bold text-brand-dark text-sm sm:text-base order-2 md:order-1">
            <a href="#" className="hover:text-brand-primary transition-colors">FAQs</a>
            <a href="#" className="hover:text-brand-primary transition-colors">Privacy</a>
            <a href="#" className="hover:text-brand-primary transition-colors">Terms</a>
            <a href="#" className="hover:text-brand-primary transition-colors">Help</a>
          </div>
          <div className="flex flex-col items-center md:items-end text-xs sm:text-sm text-gray-500 font-medium gap-1 order-1 md:order-2">
            <a href="mailto:hello@serviceman.com" className="hover:text-brand-primary">hello@serviceman.com</a>
            <a href="tel:+1234567890" className="hover:text-brand-primary">+1 234 567 890</a>
          </div>
        </div>

        <div className="flex flex-col lg:flex-row lg:justify-between lg:items-center py-6 md:py-8 gap-6 lg:gap-4">
          <p className="text-xs sm:text-sm text-gray-500 font-medium text-center lg:text-left max-w-xl mx-auto lg:mx-0">
            ServiceMan is licensed by the Local Authority as a Service Marketplace and providers insured by Partners.
            <br /><br />
            © {new Date().getFullYear()} ServiceMan.
          </p>
          <div className="flex flex-col gap-2 items-center lg:items-end">
            <div className="flex items-center gap-2 px-3 md:px-4 py-2 bg-white rounded-full shadow-sm border border-gray-100 text-xs sm:text-sm">
              <span className="w-2.5 sm:w-3 h-2.5 sm:h-3 bg-green-500 rounded-full flex-shrink-0"></span> Licensed by Authority
            </div>
            <div className="flex items-center gap-2 px-3 md:px-4 py-2 bg-white rounded-full shadow-sm border border-gray-100 text-xs sm:text-sm">
              <span className="w-2.5 sm:w-3 h-2.5 sm:h-3 bg-blue-500 rounded-full flex-shrink-0"></span> Insured Providers
            </div>
          </div>
        </div>

      </div>
    </footer>
  );
};

export default Footer;
