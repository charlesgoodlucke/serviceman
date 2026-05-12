import React from 'react';
import { Apple, Play } from 'lucide-react';

const Footer = () => {
  return (
    <footer className="pt-32 pb-10 px-6">
      <div className="max-w-7xl mx-auto">
        <div id="download" className="bg-brand-dark text-white rounded-[3rem] p-12 md:p-24 text-center mb-12">
          <h2 className="text-5xl md:text-7xl font-display font-bold tracking-tight mb-6">Download the app</h2>
          <p className="text-xl md:text-2xl text-gray-400 max-w-2xl mx-auto mb-12">
            Lots of people trust ServiceMan to get a quick fix / home service, download ServiceMan today to get started.
          </p>

          <div className="flex flex-col sm:flex-row justify-center gap-4">
            <a href="#" className="flex items-center justify-center gap-2 bg-white text-black px-8 py-4 rounded-2xl transition-transform hover:scale-105 font-bold">
              <Apple size={28} />
              <div className="flex flex-col text-left">
                <span className="text-[11px] leading-tight opacity-80">Download on the</span>
                <span className="text-xl leading-none">App Store</span>
              </div>
            </a>
            <a href="#" className="flex items-center justify-center gap-2 bg-[#2A2A2A] text-white px-8 py-4 rounded-2xl transition-transform hover:scale-105 font-bold">
              <Play size={28} fill="currentColor" />
              <div className="flex flex-col text-left">
                <span className="text-[11px] leading-tight opacity-80">GET IT ON</span>
                <span className="text-xl leading-none">Google Play</span>
              </div>
            </a>
          </div>
        </div>

        <div className="flex flex-col md:flex-row justify-between items-center py-6 border-b border-gray-200 gap-6">
          <div className="flex flex-wrap justify-center gap-8 font-bold text-brand-dark">
            <a href="#" className="hover:text-brand-primary transition-colors">FAQs</a>
            <a href="#" className="hover:text-brand-primary transition-colors">Privacy</a>
            <a href="#" className="hover:text-brand-primary transition-colors">Terms</a>
            <a href="#" className="hover:text-brand-primary transition-colors">Help</a>
          </div>
          <div className="flex flex-col items-center md:items-end text-sm text-gray-500 font-medium">
            <a href="mailto:hello@serviceman.com" className="hover:text-brand-primary">hello@serviceman.com</a>
            <a href="tel:+1234567890" className="hover:text-brand-primary">+1 234 567 890</a>
          </div>
        </div>

        <div className="flex flex-col md:flex-row justify-between items-center py-8 text-sm text-gray-500 font-medium gap-4">
          <p className="text-center md:text-left max-w-xl">
            ServiceMan is licensed by the Local Authority as a Service Marketplace and providers insured by Partners.
            <br /><br />
            © {new Date().getFullYear()} ServiceMan.
          </p>
          <div className="flex flex-col items-center md:items-end gap-2">
            <div className="flex items-center gap-2 px-4 py-2 bg-white rounded-full shadow-sm border border-gray-100">
              <span className="w-4 h-4 bg-green-500 rounded-full"></span> Licensed by Authority
            </div>
            <div className="flex items-center gap-2 px-4 py-2 bg-white rounded-full shadow-sm border border-gray-100">
              <span className="w-4 h-4 bg-blue-500 rounded-full"></span> Insured Providers
            </div>
          </div>
        </div>

      </div>
    </footer>
  );
};

export default Footer;
